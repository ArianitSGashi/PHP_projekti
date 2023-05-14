<!DOCTYPE html>
<html>
<head>        
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Trajnimet e mbajtura</title>
	<style>
		body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
		background-image: url("Fotot/figura2.jpg");
		background-repeat: no-repeat;
        background-size: cover;
		}

        .container-1 {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            border-radius: 5px;
        }
        
        h1 {
            text-align: center;
            margin-top: 0;
            font-size: 36px;
            color: #333;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }
        
        th {
            background-color: #f0f0f0;
        }
        
        tr:hover {
            background-color: #f5f5f5;
        }
        
        .date {
            font-weight: bold;
            color: #666;
        }
        
        .course {
            font-weight: bold;
            color: #333;
        }
        
        .location {
            color: #666;
        }
        
        .duration {
            font-style: italic;
            color: #666;
        }
        
        .certificate {
            color: #333;
        }
    </style>
</head>
<body>
	
	<div class="container-1">
		<h1>Trajnimet e mbajtura</h1>
		<table>
			<thead>
				<tr>
					<th>Course ID</th>
					<th>Trajnimi</th>
					<th>Pershkrimi</th>
					<th>Data e fillimit</th>
                    <th>Data e mbarimit</th>
					<th>Profesori</th>
					<th>Kohëzgjatja</th>
					<th>Certifikata</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td >Trajnimi1</td>
					<td class="course">Cybersecurity Fundamentals</td>
					<td >Pershkrim </td>
					<td class="date">10/05/2023</td>
                    <td class="date">10/08/2023</td>
					<td>Prof. X</td>
					<td class="duration">4 javë</td>
					<td><a href="#" class="certificate">Shiko</a></td>
				</tr>
				<tr>
				<td >Trajnimi1</td>
					<td class="course">Cybersecurity Fundamentals</td>
					<td >Pershkrim </td>
					<td class="date">10/05/2023</td>
                    <td class="date">10/08/2023</td>
					<td>Prof. X</td>
					<td class="duration">4 javë</td>
					<td><a href="#" class="certificate">Shiko</a></td>
				</tr>
				<tr>
				<td >Trajnimi1</td>
					<td class="course">Cybersecurity Fundamentals</td>
					<td >Pershkrim </td>
					<td class="date">10/05/2023</td>
                    <td class="date">10/08/2023</td>
					<td>Prof. X</td>
					<td class="duration">4 javë</td>
					<td><a href="#" class="certificate">Shiko</a></td>
				</tr>
			</tbody>
		</table>
	</div>

	
</body>
</html>


