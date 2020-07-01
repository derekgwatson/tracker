<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Watson Blinds Tracker</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
        <div class="position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Watson Order Search
                </div>
				
				<table class="table" border="0">
					<tr>
						<td width="10%"><strong>Order: </strong></td>
						<td width="40%" align="left">{{ $orderno }}</td>
                        <td width="10%"><strong>Email: </strong></td>
                        <td width="40%" align="left">&nbsp;{{ $email }}</td>
					</tr>
					<tr>
						<td><strong>Customer: </strong></td>
						<td align="left">{{ $customer }}</td>
				        <td><strong>Phone: </strong></td>
                        <td align="left">&nbsp;{{ $phone }}</td>
					</tr>
					<tr>
						<td><strong>Order&nbsp;Date: </strong></td>
						<td align="left">{{ $orderdate }}</td>
				        <td><strong>Mobile: </strong></td>
                        <td align="left">{{ $mobile }}</td>
					</tr>
                </table>
                <hr>
                <table class="table" border="0">
                    <thead>
                        <tr>
                            <th scope="col">Status</th>
                            <th scope="col">Item</th>
                            <th scope="col">Last Update</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>Outsourced product order placed with Supplier</td>
                        <td>COMM Commercial</td>
                        <td>Fri Jun 26 2020 07:50:54</td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>
