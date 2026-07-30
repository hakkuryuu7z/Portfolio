<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductionDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = {
            "projects": [
                {
                    "title": "Automated Retail Dashboard: Sales Tracking & Stock Aggregation",
                    "description": "EDP Report is a full-stack automated reporting and analytics platform designed to streamline corporate retail data management. Built with native PHP and supercharged by a background Python automation engine using Playwright, the application autonomously extracts, archives, and organizes weekly corporate closing logs.\n\nIt eliminates manual data entry by automatically handling session cookies and processing raw data into structured ZIP archives via PM2. On the frontend, it features a dynamic analytics dashboard that visualizes locked monthly sales targets for representatives and utilizes advanced database queries to cleanly aggregate and group complex inventory variations. The result is a highly optimized, hands-off intelligence tool that provides crystal-clear visibility into both sales performance and stock levels.",
                    "image_path": "01KYRP1C9D8HTFZ1GTDYNND69Y.png",
                    "github_url": "https://github.com/hakkuryuu7z/spi2pbdg",
                    "demo_url": null,
                    "created_at": "2026-07-30 04:55:31",
                    "updated_at": "2026-07-30 04:55:31"
                },
                {
                    "title": "TarikLaporan: Playwright & PHP Data Automation Engine",
                    "description": "Tarik Laporan is a hybrid automation and web scraping tool designed to autonomously extract and archive weekly corporate closing logs. Built to eliminate manual data retrieval, the engine utilizes a background Python script powered by the Playwright browser emulation library to navigate complex corporate reporting portals.\n\nThe system handles authentication by injecting hardcoded session cookies and constructing precise cURL payloads to bypass standard login barriers. Once the raw weekly data is pulled, the script automatically processes and packages the output into structured ZIP archives for easy distribution. The entire background extraction lifecycle is managed and kept alive continuously using PM2 process management, ensuring reliable, hands-off reporting delivery.\n\nCore Technologies: Python, Playwright, Native PHP, cURL, PM2, ZIP Archiving.",
                    "image_path": "01KYRPBVFX7BJSN7AD7TZWWN44.png",
                    "github_url": "https://github.com/hakkuryuu7z/tarik_laporan",
                    "demo_url": null,
                    "created_at": "2026-07-30 05:01:15",
                    "updated_at": "2026-07-30 05:01:15"
                },
                {
                    "title": "WhatsApp Blast Pro: Automated Corporate Outreach & Broadcast System",
                    "description": "WhatsApp Blast Pro is an automated bulk messaging utility designed to streamline mass communication, customer outreach, and automated notification workflows. Built using JavaScript and Node.js, the application handles structured data batching and seamless message dispatching.\n\nIt is engineered for efficiency, allowing users to queue, manage, and broadcast custom messages reliably without repetitive manual sending. The system focuses on clean asynchronous execution and high-performance throughput to automate routine business communication channels.\n\nCore Technologies: JavaScript, Node.js, Asynchronous Event Loops, Automation Scripting.",
                    "image_path": "01KYRT5M5EVRXNA960BHPX2RGR.png",
                    "github_url": "https://github.com/hakkuryuu7z/whatsapp-blast-pro",
                    "demo_url": "https://wablast.hakkuryuu7z.my.id/login",
                    "created_at": "2026-07-30 06:07:45",
                    "updated_at": "2026-07-30 06:07:45"
                },
                {
                    "title": "Pencatatan Keuangan: Comprehensive Financial Tracking System",
                    "description": "Pencatatan Keuangan is a web-based financial management application designed to track, organize, and analyze daily income and expenses efficiently. Built to replace manual accounting methods, the system leverages a robust relational database architecture to securely log transactions, categorize cash flow, and maintain strict data integrity.\n\nThe application features an intuitive dashboard that visualizes financial health, allowing users to monitor balances and generate detailed aggregate reports. Engineered with optimized database queries to handle complex financial calculations, it delivers accurate, real-time insights into revenue streams and expenditure, making it an essential tool for structured financial administration.\n\nCore Technologies: PHP, MySQL / PostgreSQL, JavaScript, Relational Database Structuring.",
                    "image_path": "01KYRTH4P7QCNDG43B44A3YYRY.png",
                    "github_url": "https://github.com/hakkuryuu7z/Pencatatan-keuangan",
                    "demo_url": null,
                    "created_at": "2026-07-30 06:14:02",
                    "updated_at": "2026-07-30 06:14:02"
                },
                {
                    "title": "Bot Tanya: Automated Q&A & Conversational Assistant",
                    "description": "Bot Tanya is an automated conversational assistant designed to parse user queries, provide instant automated responses, and streamline information retrieval. Built to handle repetitive inquiries efficiently, the bot leverages asynchronous event handling to process incoming messages and commands in real-time.\n\nDesigned to function as an interactive query engine, the system minimizes manual intervention by routing and answering questions autonomously. Engineered for fast response times and stable uptime, it integrates clean logic, API webhooks, and precise data parsing to ensure smooth, reliable, and continuously running conversational workflows.\n\nCore Technologies: Node.js / Python, Asynchronous Automation, API Integration, Webhooks.",
                    "image_path": "01KYRTXZJZJQQ2R20K8T61R452.png",
                    "github_url": "https://github.com/hakkuryuu7z/bot_tanya",
                    "demo_url": null,
                    "created_at": "2026-07-30 06:21:03",
                    "updated_at": "2026-07-30 06:21:03"
                }
            ],
            "skills": [
                {
                    "name": "PHP (Native & modern standards), JavaScript (ES6+), Python, HTML5, CSS3.",
                    "created_at": "2026-07-30 04:46:30",
                    "updated_at": "2026-07-30 04:46:30"
                },
                {
                    "name": "Laravel, Node.js, jQuery.",
                    "created_at": "2026-07-30 04:46:38",
                    "updated_at": "2026-07-30 04:46:38"
                },
                {
                    "name": "PostgreSQL, MySQL.",
                    "created_at": "2026-07-30 04:47:07",
                    "updated_at": "2026-07-30 04:47:07"
                },
                {
                    "name": "Python, Playwright, cURL, PM2 process manager.",
                    "created_at": "2026-07-30 04:47:44",
                    "updated_at": "2026-07-30 04:47:44"
                },
                {
                    "name": "Ubuntu Linux VPS, Proxmox VE (bare-metal hypervisors).",
                    "created_at": "2026-07-30 04:48:52",
                    "updated_at": "2026-07-30 04:48:52"
                },
                {
                    "name": "Cloudflare, Nmap, Traceroute, Virtual Private Networks (VPNs).",
                    "created_at": "2026-07-30 04:49:04",
                    "updated_at": "2026-07-30 04:49:04"
                },
                {
                    "name": "Git, GitHub.",
                    "created_at": "2026-07-30 04:49:26",
                    "updated_at": "2026-07-30 04:49:26"
                }
            ],
            "settings": [
                {
                    "key": "name",
                    "value": "Muhammad Wildan Safrudin"
                },
                {
                    "key": "profession",
                    "value": "Full Stack Developer"
                },
                {
                    "key": "about_me",
                    "value": "Hi, I'm Muhammad Wildan Safrudin, an Electronic Data Processing (EDP) professional with a background in Software Engineering (RPL) and a strong passion for technology.\n\nI enjoy building web applications, managing servers, and solving technical problems. My experience ranges from developing PHP and MySQL based applications to deploying projects with Docker on Ubuntu VPS. I also have a growing interest in Linux administration, networking, and cloud technologies because I believe understanding infrastructure is just as important as writing good code.\n\nOutside of work, I'm constantly learning and improving my skills by creating personal projects, experimenting with new technologies, and building a portfolio that reflects real-world experience. I enjoy turning ideas into functional solutions while continuously expanding my knowledge in backend development, DevOps, and system administration.\n\nMy long-term goal is to become a highly skilled IT professional capable of designing, developing, and maintaining scalable systems that make a real impact.\n\nTech Stack\n\nPHP\nMySQL\nHTML, CSS & JavaScript\nDocker\nUbuntu Linux\nVPS Management\nGit & GitHub\nNetworking Fundamentals\n\n\"Never stop learning, because technology never stops evolving.\""
                },
                {
                    "key": "email",
                    "value": "muhammadwildansafrudin@gmail.com"
                }
            ]
        };

        // Insert Projects
        foreach ($data['projects'] as $project) {
            DB::table('projects')->insert($project);
        }

        // Insert Skills
        foreach ($data['skills'] as $skill) {
            DB::table('skills')->insert($skill);
        }

        // Insert Settings
        foreach ($data['settings'] as $setting) {
            DB::table('settings')->insert($setting);
        }
    }
}
