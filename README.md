
# i-Detector
Educational tool for simulating Instagram login and 2FA mechanisms. Designed for ethical hacking and cybersecurity training.
### Dev: Er4vn | Telegram: @er4vnn
<p align="center">
<img src="https://github.com/user-attachments/assets/a9a805fe-d721-42cd-88da-bad816286416" alt="Cyber Instagram Logo" width="450"/>
</p>
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

#### ✅ Requirements
- Python 3 installed
- Internet connection
- Basic terminal knowledge

---

#### 🖥️ Run on Windows:

1. Open CMD or PowerShell
2. Navigate to the script directory
cd path\to\your\script

3. Run the script
python run.py

---

#### 🖥️ Run on Linux:

1. Open your terminal
2. Navigate to the script directory
cd /path/to/your/script

3. Run the script
python3 run.py

---

#### 📱 Run on Termux (Android):

1. Open Termux
2. Install Python if not already installed
pkg install python

3. Navigate to your script directory
cd /path/to/your/script

4. Run the script
python run.py





