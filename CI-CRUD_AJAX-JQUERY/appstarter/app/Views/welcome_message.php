<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
	<table>
		<th>
			<tr>
				<td>ID</td>
				<td>First Name</td>
				<td>Last Name</td>
				<td>Email</td>
				<td>Gender</td>
				<td>IP_Address</td>
			</tr>
		</th>
		<tbody>
			<tr>
				<td></td>
			</tr>
		</tbody>
	</table>

	<button class="loadMore">Load more data</button>
</body>

</html>
<script src="./dist/index.js"></script>
<script>
	$(document).ready(function() {
		let getData;
		let curCount = 5

		function loadData() {
			$.ajax({
				url: `<?= site_url('home/getdata/') ?>${curCount}`,
				dataType: 'json',
				success: function(data, status, xhr) {
					getData = data
					console.log(getData)
				}
			})
		}

		loadData()

		$('.loadMore').on('click', function() {
			curCount += 5
			loadData()
		})
	})
</script>