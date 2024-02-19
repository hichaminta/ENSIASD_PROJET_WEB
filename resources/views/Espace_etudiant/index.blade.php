<x-compementetudiant title="Espace etudiant">
    <style>
        /* Resetting default margin and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .announcement-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .announcement-title {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }
        .announcement-content {
            font-size: 16px;
            color: #666;
        }
        .announcement-content ul {
            list-style-type: square;
            margin-left: 20px;
        }
    </style>

        <div class="container">
            <div class="announcement-header">
                <h2 class="announcement-title">Important Announcement</h2>
            </div>
            <div class="announcement-content">
                <p>Hello students</p>
                <p>This is to inform you about an upcoming event:</p>
                <ul>
                    <li>Date: February 25, 2024</li>
                    <li>Time: 10:00 AM - 12:00 PM</li>
                    <li>Location: Auditorium</li>
                </ul>
                <p>Best regards,<br>Admin Team</p>
            </div>
        </div>

</x-compementetudiant>
