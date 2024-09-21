<?php
$applications = [
    ['job_title' => 'Software Engineer', 'application_status' => 'Pending', 'interview_status' => 'Not Scheduled']
];

$relevant_jobs = [
    ['job_title' => 'Software Engineer', 'company' => 'TechCorp', 'location' => 'Dhaka']
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Applicant Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f0f0f0;
        }
        .dashboard {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1, h2 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .action-button {
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        .edit {
            background-color: #ffc107;
            color: black;
        }
        .cancel {
            background-color: #dc3545;
            color: white;
        }
        .apply {
            background-color: #28a745;
            color: white;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <h1>Job Applicant Dashboard</h1>
        
        <h2>Your Applications</h2>
        <table>
            <thead>
                <tr>
                    <th>Job Title</th>
                    <th>Application Status</th>
                    <th>Interview Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($applications as $app): ?>
                <tr>
                    <td><?php echo htmlspecialchars($app['job_title']); ?></td>
                    <td><?php echo htmlspecialchars($app['application_status']); ?></td>
                    <td><?php echo htmlspecialchars($app['interview_status']); ?></td>
                    <td>
                        <button class="action-button edit">Edit</button>
                        <button class="action-button cancel">Cancel</button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
        <h2>Relevant Jobs</h2>
        <table>
            <thead>
                <tr>
                    <th>Job Title</th>
                    <th>Company</th>
                    <th>Location</th>
                    <th>Apply</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($relevant_jobs as $job): ?>
                <tr>
                    <td><?php echo htmlspecialchars($job['job_title']); ?></td>
                    <td><?php echo htmlspecialchars($job['company']); ?></td>
                    <td><?php echo htmlspecialchars($job['location']); ?></td>
                    <td>
                        <button class="action-button apply">Apply</button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>