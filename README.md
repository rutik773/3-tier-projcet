
↕
↕
Amazon RDS (DB Tier - Private Subnet)

yaml
Copy
Edit

<!-- Add architecture image here -->
<img width="958" height="434" alt="EC2-dashbord" src="https://github.com/user-attachments/assets/5bb98ea4-8d65-4426-bb70-00c3f660d2f2" />


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
- <img width="1920" height="1080" alt="Screenshot 2025-07-24 184630" src="https://github.com/user-attachments/assets/cef317c9-d4bb-4c47-8303-6490f05671c8" />

- **App Tier (Private Subnet)**:
- <img width="959" height="488" alt="app-tier" src="https://github.com/user-attachments/assets/56534c52-f8ca-411f-9dc0-a477c3e508cc" />

  - NGINX
  - PHP application
- **DB Tier (Private Subnet)**:
- <img width="960" height="479" alt="my sql" src="https://github.com/user-attachments/assets/dec8729a-80ad-4faa-b7e6-88c14bcaaead" />

  - Amazon RDS
  - <img width="956" height="433" alt="Rds-database" src="https://github.com/user-attachments/assets/0f14d872-1907-4f18-a88d-989639eb70ae" />

- **Security Groups**:
  - NGINX: Allows HTTP/HTTPS from Internet
  - App to DB: Only internal access (port 3306/5432)
- **IAM & Best Practices**:
  - Least privilege access
  - No public access to DB
  - <img width="949" height="467" alt="html singup" src="https://github.com/user-attachments/assets/053f90d5-a43c-4aee-80fe-053ce265acdb" />
  <img width="957" height="470" alt="result-submit" src="https://github.com/user-attachments/assets/80a2d872-d896-41f9-ae9d-ba6ab4de16a2" />



---

## 📸 Screenshots

<!-- Replace with actual images you send -->
![Signup Form](images/signup-form.png)


---


