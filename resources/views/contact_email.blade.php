<html>
<head>
	<style>
		body{
			font-family: Roboto;
			font-size: 14pt;
		}
		h5{
			font-weight: 400;
			font-size: 12pt;
		}
	</style>
</head>
<body>
	<h2>Halo Admin,</h2>
	Anda menerima pesan dari : {{ $name }}
	<br>Berikut detil lebih jelas :
	<br>
	<b>Nama:</b> {{ $name }}
	<br><b>Email:</b> {{ $email }}
	<br><b>Nomor WA:</b> {{ $phone }}
	<br><b>Pesan:</b> {{ $user_message }}
	<br><br><h5>Terimakasih
	<br>Harap balas pesan ini ke {{ $name }}
	<br>Pesan ini dikirim otomatis melalui website PKM</h5>
</body>
</html>