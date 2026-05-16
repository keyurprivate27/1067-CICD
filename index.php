<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Students Table</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            padding: 30px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            background: white;
            box-shadow: 0px 2px 8px rgba(0,0,0,0.1);
        }

        th {
            background-color: #007bff;
            color: white;
            padding: 12px;
        }

        td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>

<body>

    <h2>Student Information</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Mobile No</th>
                <th>Email</th>
                <th>Course</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>Rahul Sharma</td>
                <td>9876543210</td>
                <td>rahul@gmail.com</td>
                <td>Python</td>
            </tr>

            <tr>
                <td>2</td>
                <td>Priya Patel</td>
                <td>9123456780</td>
                <td>priya@gmail.com</td>
                <td>Java</td>
            </tr>

            <tr>
                <td>3</td>
                <td>Amit Verma</td>
                <td>9988776655</td>
                <td>amit@gmail.com</td>
                <td>AWS</td>
            </tr>

            <tr>
                <td>4</td>
                <td>Neha Joshi</td>
                <td>9090909090</td>
                <td>neha@gmail.com</td>
                <td>SQL</td>
            </tr>

            <tr>
                <td>5</td>
                <td>Karan Mehta</td>
                <td>8888777766</td>
                <td>karan@gmail.com</td>
                <td>Angular</td>
            </tr>
        </tbody>
    </table>

</body>
</html>