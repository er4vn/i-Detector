import requests
import random
import threading
import time
from concurrent.futures import ThreadPoolExecutor

# فقط کاراکترهای l و I مجازن
chars = ['l', 'I']
suffixes = ['-','I','l']
checked = set()
lock = threading.Lock()

url = "https://accounts.api.playstation.com/api/v1/accounts/onlineIds"
headers = {
    "Host": "accounts.api.playstation.com",
    "Content-Type": "application/json; charset=UTF-8",
    "User-Agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36",
    "Origin": "https://id.sonyentertainmentnetwork.com",
    "Referer": "https://id.sonyentertainmentnetwork.com/",
    "Accept": "*/*",
    "Connection": "keep-alive"
}

def generate_random_id():
    while True:
        length = random.choice([4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15])  # چون -l هم قراره اضافه شه، بشه 14 یا 15 کاراکتر نهایی
        base = ''.join(random.choices(chars, k=length))
        suffix = random.choice(suffixes)
        full_id = base + suffix
        with lock:
            if full_id not in checked:
                checked.add(full_id)
                return full_id

def check_id(online_id):
    payload = {
        "onlineId": online_id,
        "reserveIfAvailable": False  # در JSON میشه false
    }

    try:
        response = requests.post(url, json=payload, headers=headers)
        status = response.status_code

        with lock:
            if status == 201:
                print(f"[✅ AVAILABLE] {online_id}")
                with open("available_ids.txt", "a") as f:
                    f.write(online_id + "\n")
            elif status == 409:
                print(f"[❌ TAKEN] {online_id}")
            elif status == 400:
                print(f"[❌ INVALID] {online_id}")
            elif status == 429:
                print(f"[⏱ RATE LIMITED] {online_id} | Sleeping 10s")
                time.sleep(10)
                check_id(online_id)
            else:
                print(f"[⚠️ STATUS {status}] {online_id} | {response.text}")
    except Exception as e:
        with lock:
            print(f"[❌ ERROR] {online_id} | {e}")

def main():
    max_threads = 2  # محدودیت 2 تا ترد
    with ThreadPoolExecutor(max_workers=max_threads) as executor:
        while True:
            online_id = generate_random_id()
            executor.submit(check_id, online_id)

if __name__ == "__main__":
    main()
