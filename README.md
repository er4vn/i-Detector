<div align="center">

<img width="1983" height="793" alt="ChatGPT Image Jul 19, 2026, 03_13_53 AM" src="https://github.com/user-attachments/assets/beb6f5ea-e88d-47ee-ab23-e8eb2505432a" />

# i-Detector 

### Educational tool for simulating Instagram login and 2FA mechanisms. Designed for ethical hacking and cybersecurity training.

</div>

## 📘 About the Tool

**i-Detector** is an educational tool that leverages social engineering techniques to simulate Instagram login and 2FA mechanisms.  
This is the **initial version**, featuring a simple and practical design that will be updated over time.

### 📂 Tool Content

Inside the `source code` folder, you will find all the necessary files required to run a **fake login page**.  
You can upload these files to any web server or hosting environment to start using the tool.

> ⚠️ To collect user input data, you will need a **separate data management script** which must run on your own device.

---

### 🐍 Data Management Tool

The data management tool is written in **Python** and is so easy to use that anyone can run it, regardless of technical background.  
It listens for login events and displays user-submitted credentials in real-time.

### ⚙️ How to Use the Data Management Tool (`run.py`)

The file `run.py` is the core of the data management system. It's written in Python and works on **Windows**, **Linux**, and **Termux (Android)** with internet access.

This script monitors the login activity on your fake page and displays the submitted data in real-time, allowing you to approve or reject each login attempt.

---

## ✅ Requirements

Before running the project, make sure you have:

- Python **3.10** or newer
- Git (optional, for cloning the repository)
- Stable Internet Connection

---

# 🪟 Windows

### 1. Open Command Prompt or PowerShell

Navigate to the project directory:

```bash
cd C:\path\to\i-Detector
```

Install dependencies (if required):

```bash
pip install -r requirements.txt
```

Run the application:

```bash
python run.py
```

---

# 🐧 Linux

Open your terminal and navigate to the project directory:

```bash
cd /path/to/i-Detector
```

Install dependencies:

```bash
pip3 install -r requirements.txt
```

Run:

```bash
python3 run.py
```

---

# 🍏 macOS

Open Terminal and navigate to the project directory:

```bash
cd /path/to/i-Detector
```

Install dependencies:

```bash
pip3 install -r requirements.txt
```

Run:

```bash
python3 run.py
```

---

# 📱 Termux (Android)

Install Python:

```bash
pkg update && pkg upgrade

pkg install python git
```

Navigate to the project directory:

```bash
cd /path/to/i-Detector
```

Install dependencies:

```bash
pip install -r requirements.txt
```

Run:

```bash
python run.py
```

---

## 🚀 Verify Installation

Check your Python version:

```bash
python --version
```

or

```bash
python3 --version
```

If everything is installed correctly, start the application:

```bash
python run.py
```
<img width="1267" height="743" alt="Screenshot 2025-07-22 173445" src="https://github.com/user-attachments/assets/1572d35f-7b9d-4b3f-9793-cda988309197" />







