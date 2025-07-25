# 🛡️ Secure Signup Application on AWS (Multi-Tier Architecture)

A simple and secure user signup system deployed on AWS using a multi-tier architecture. This project demonstrates best practices for web application deployment using private/public subnets, NGINX as a reverse proxy, and RDS as a managed database service.

---

## 🔧 Tech Stack

- **Frontend**: HTML5, CSS
- **Backend**: PHP (`submit.php`)
- **Web Server**: NGINX (in App Tier)
- **Database**: Amazon RDS (MySQL/PostgreSQL) in DB Tier
- **Cloud Provider**: AWS
- **Architecture**: 3-tier VPC (Public & Private Subnets)

---

## 🧠 Project Architecture

User ↔️ Internet ↔️ NGINX (App Tier - Private Subnet)
↕
PHP Application
↕
Amazon RDS (DB Tier - Private Subnet)

yaml
Copy
Edit

<!-- Add architecture image here -->
![Architecture Diagram](images/aws-architecture.png)

---

## 📝 Features

- Simple HTML signup form (`signup.html`)
- PHP backend to process form data (`submit.php`)
- Secure data handling and submission
- Deployed in isolated private subnets for App and DB tiers
- Reverse proxy with NGINX for performance and security

---

## 🚀 Deployment Overview

### 1. **Frontend**
- Static `signup.html` hosted on NGINX in App Tier
- HTML form posts data to `submit.php`

### 2. **Backend**
- `submit.php` processes data and writes to RDS
- Only App Tier can access RDS (both in private subnets)

### 3. **NGINX**
- Running in App Tier behind NAT Gateway or via bastion for access
- Acts as a reverse proxy to the PHP backend

### 4. **RDS**
- Hosted in DB Tier (Private Subnet)
- Only accessible from App Tier security group

---

## 🏗️ Infrastructure Details

- **VPC with Public & Private Subnets**
- **App Tier (Private Subnet)**:
  - NGINX
  - PHP application
- **DB Tier (Private Subnet)**:
  - Amazon RDS
- **Security Groups**:
  - NGINX: Allows HTTP/HTTPS from Internet
  - App to DB: Only internal access (port 3306/5432)
- **IAM & Best Practices**:
  - Least privilege access
  - No public access to DB

---

## 📸 Screenshots

<!-- Replace with actual images you send -->
![Signup Form](images/signup-form.png)
<img width="958" height="434" alt="EC2-dashbord" src="https://github.com/user-attachments/assets/98c0cc9e-d460-4c67-966d-78ad41947c71" />


---

## 🧪 How to Use

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/signup-aws-app.git
   cd signup-aws-app
