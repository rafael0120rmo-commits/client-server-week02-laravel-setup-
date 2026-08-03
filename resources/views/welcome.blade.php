<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f0f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .card {
            background: #ffffff;
            border-radius: 12px;
            padding: 40px 50px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            max-width: 500px;
            width: 100%;
        }

        h1 {
            font-size: 1.5rem;
            color: #1a202c;
            margin-bottom: 24px;
            border-bottom: 2px solid #4f46e5;
            padding-bottom: 12px;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #e2e8f0;
            font-size: 0.95rem;
        }

        .info-row:last-child { border-bottom: none; }

        .label {
            font-weight: 600;
            color: #4a5568;
            min-width: 130px;
        }

        .value {
            color: #2d3748;
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Student Information</h1>

        <div class="info-row">
            <span class="label">Name</span>
            <span class="value">{{ $student['name'] }}</span>
        </div>
        <div class="info-row">
            <span class="label">Student No.</span>
            <span class="value">{{ $student['number'] }}</span>
        </div>
        <div class="info-row">
            <span class="label">Course</span>
            <span class="value">{{ $student['course'] }}</span>
        </div>
        <div class="info-row">
            <span class="label">Section</span>
            <span class="value">{{ $student['section'] }}</span>
        </div>
        <div class="info-row">
            <span class="label">Subject</span>
            <span class="value">{{ $student['subject'] }}</span>
        </div>
        <div class="info-row">
            <span class="label">Date</span>
            <span class="value">{{ $student['date'] }}</span>
        </div>
    </div>
</body>
</html>