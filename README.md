🎓 UniEquip – University Event Equipment Inventory Management System

UniEquip is a web-based equipment management system designed for universities to simplify the process of borrowing, tracking, and managing event equipment.
It replaces manual record-keeping with a digital platform that allows both students and staff to interact efficiently.

🖼️ Project Screenshots

(Replace the placeholders below with your actual screenshots, e.g., upload images to /assets/screenshots folder.)

Login Page	
![index](https://github.com/user-attachments/assets/35d88f10-cfa7-49a2-b0c0-f39108c5f67d)
![Screenshot_25-6-2025_20536_universityevent kesug com](https://github.com/user-attachments/assets/4c7a8c13-ffa7-497b-98d4-6f7de37d72db)

Admin Dashboard
![Screenshot_25-6-2025_21019_universityevent kesug com](https://github.com/user-attachments/assets/452edbd8-4951-442d-935b-0223b3301563)

Student Dashboard
![Screenshot_25-6-2025_205445_universityevent kesug com](https://github.com/user-attachments/assets/bcb8ad37-f159-4202-b5c0-2a95ac4c4620)

Reservation Form
![Screenshot_25-6-2025_205736_universityevent kesug com](https://github.com/user-attachments/assets/76df5a95-3b40-43b8-bf82-e88e79ec07a1)

Other Page
![Screenshot_25-6-2025_21648_universityevent kesug com](https://github.com/user-attachments/assets/9f50ec95-fe93-42d5-8f33-ece903612490)
![Screenshot_25-6-2025_21622_universityevent kesug com](https://github.com/user-attachments/assets/7dcf0ab1-0e7a-4f59-a776-7b3a95e79f01)
![Screenshot_25-6-2025_21558_universityevent kesug com](https://github.com/user-attachments/assets/bba6392c-ada1-4ec0-95a6-1b320e41e62f)
![Screenshot_25-6-2025_21542_universityevent kesug com](https://github.com/user-attachments/assets/e70ccb67-c3e4-4004-8af4-3403cd3051e5)
![Screenshot_25-6-2025_21527_universityevent kesug com](https://github.com/user-attachments/assets/c17249f1-88a2-4be4-952c-ebd9836c8199)
![Screenshot_25-6-2025_21436_universityevent kesug com](https://github.com/user-attachments/assets/5d5d4a26-0c90-46d5-90db-42a8765ebcd1)
![Screenshot_25-6-2025_21421_universityevent kesug com](https://github.com/user-attachments/assets/70dd1986-5cc8-4e3a-8abe-b94aafb12750)
![Screenshot_25-6-2025_21344_universityevent kesug com](https://github.com/user-attachments/assets/ccf446e9-76a6-494a-a80c-2258d7b5e595)
![Screenshot_25-6-2025_21318_universityevent kesug com](https://github.com/user-attachments/assets/f9979f4d-c4d8-44bc-bc74-e5c95eb0d075)
![Screenshot_25-6-2025_21245_universityevent kesug com](https://github.com/user-attachments/assets/4552cade-fd93-4e49-86b3-fdbe10923545)
![Screenshot_25-6-2025_21227_universityevent kesug com](https://github.com/user-attachments/assets/6f05b58c-e96f-4d1f-9025-974e121c35af)
![Screenshot_25-6-2025_21128_universityevent kesug com](https://github.com/user-attachments/assets/18b85fab-3bf9-46c5-b593-a8b68c6c59b0)
![Screenshot_25-6-2025_21111_universityevent kesug com](https://github.com/user-attachments/assets/3c8887ea-0102-43ec-a99e-de4e27521182)
![Screenshot_25-6-2025_21054_universityevent kesug com](https://github.com/user-attachments/assets/df1f5daa-79a9-4bad-b5d7-1a291fa23b0d)

	
🧩 Features & Functions
👩‍🎓 Student Features

Register and log in to the system.

View available equipment in real time.

Submit borrowing/reservation requests for events.

Receive approval or rejection notifications.

View reservation history.

👨‍🏫 Staff Features

Add, edit, or delete equipment details.

Update equipment availability (Available / Maintenance).

View, approve, or reject student borrowing requests.

Generate reports on reservations and equipment usage.

Export reports as PDF or Excel.

⚙️ System Overview

The University Event Equipment Inventory Management System streamlines university event logistics by:

Reducing manual errors and misplaced records.

Allowing centralized management of all equipment.

Improving communication between staff and students.

Ensuring real-time tracking and accurate reporting.

Core Modules:

User Authentication (Login/Register)

Equipment Management

Reservation & Approval Workflow

Availability Tracking

Report Generation

🏗️ System Architecture

UniEquip follows a 3-tier architecture:

Frontend – Web interface for students and staff.

Backend – Server handling authentication, business logic, and data flow.

Database – Stores users, equipment, reservations, and reports.

Users → Web Application → Server → Database

🧮 Database Design
Entity	Description
Admin	Stores staff login details and contact info.
User	Contains student information and login credentials.
Equipment	Manages equipment details, status, and quantity.
Booking	Stores booking information (event, date, club, etc.).
Booking_Equipment	Maps equipment items to their respective bookings.
💻 Installation & Setup
Prerequisites

XAMPP (or any PHP + MySQL environment)

Web browser (Chrome, Edge, Firefox)

Steps

Clone this repository:

git clone https://github.com/yourusername/UniEquip.git


Move the project folder into your local server directory:

C:\xampp\htdocs\UniEquip


Import the SQL database:

Open phpMyAdmin → Create a new database named uniequip

Import uniequip.sql from the project folder.

Run the application:

http://localhost/UniEquip


Log in using test accounts or register a new one.

🧠 Benefits

📦 Centralized system for equipment management.

⚡ Faster processing of event requests.

🔒 Secure role-based access for students and staff.

📊 Real-time reports for better decision making.

🧾 Paperless, error-free, and eco-friendly workflow.

🧑‍💻 Contributors
Name	Student ID	Role
Muhammad Akmal Wafi bin Muhammad Hatta	2023443918	System Developer
Muhamad Wafi bin Affandi	2023226262	Database Designer
Muhammad Idham bin Zuhri	2023436146	Frontend Developer
Muhammad Danish Irfan bin Muhaizul	202326162	Backend Developer
📄 License

This project is developed for academic purposes and is not intended for commercial use.
