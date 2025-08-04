Project Title & Intro:
# LAMP Stack DevOps Project with CI/CD
 Used Tools
## 🔧 Tools Used

- PHP
- Apache
- MySQL
- Docker
- Ansible
- GitHub Actions (CI/CD)
 Project Features:
## 🚀 Features

- Automated LAMP Stack Deployment using Ansible
- Docker containerized PHP + MySQL App
- GitHub Actions powered CI/CD Pipeline
- Environment Variables for DB security
- Volume-based MySQL Backups
- Production-ready setup


## 📁 Project Structure

lamp-devops-ci-cd/
├── ansible/
├── docker/
├── .github/workflows/ci.yml
├── docker-compose.yml
├── index.php
├── lamp-playbook.yml
├── hosts.ini
├── .env
└── README.md
 How to Run:
## ⚙️ How to Run

1. Clone the repository:
   ```bash
   git clone git@github.com:rimisarker/lamp-devops-ci-cd.git
   cd lamp-devops-ci-cd


Add your .env file:

MYSQL_ROOT_PASSWORD=rootpass
MYSQL_DATABASE=myapp
MYSQL_USER=myuser
MYSQL_PASSWORD=mypass

Build and run:
docker-compose up -d --build

Open browser:
http://localhost


🛡️ Security
DB credentials managed via .env file

.env is ignored from Git (in .gitignore)

Database can be backed up using Docker volumes

## ✨ Author

**Rimi**  
DevOps Enthusiast | Linux Lover | Automation Practitioner  
📧 Email: rimisarker70@gmail.com
GitHub:https://github.com/rimisarker

