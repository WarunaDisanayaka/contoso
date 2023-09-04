<!DOCTYPE html>
<html>
<head>
    <title>Monthly Sales Report</title>
</head>
<body>
    <h1>Monthly Sales Report</h1>
    
    <table>
        <thead>
            <tr>
                <th>Year</th>
                <th>Month</th>
                <th>Total Sales</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($monthlySales as $monthly)
            <tr>
                <td>{{ $monthly->year }}</td>
                <td>{{ date('F', mktime(0, 0, 0, $monthly->month, 1)) }}</td>
                <td>{{ $monthly->total_sales }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
