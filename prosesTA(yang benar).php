
<body style="font-family:mimich;background-color: #a6d183;">

	<center><h2 style="font-family:mimich ; text-shadow: 30%">My Profile</h2></center>
	<form action=" " method="POST" enctype="multipart/form-data">
	<table>
		<ul>
		<tr>
			<td><li><b>Photo</b></li></td>
			<td> <input type="file" name="poto" style="width: 80%; height: 20px; border-radius: 10%"></td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
		<tr>
			<td><li><b>Hobby :</b></li></td>
		</tr>
		<tr>
			<td>
				<input type="checkbox" name="hoby[]" value="Berenang">Berenang <br>
				<input type="checkbox" name="hoby[]" value="Mendenagrakn Musik">Mendengarkan Musik 
			</td>
			<td>
				<input type="checkbox" name="hoby[]" value="Badminton">Badminton<br>
				<input type="checkbox" name="hoby[]" value="Membaca Novel">Membaca Novel
			</td>
			<td>
				<input type="checkbox" name="hoby[]" value="Makan">Makan<br>
				<input type="checkbox" name="hoby[]" value="Tidur">Tidur
			</td>
			<td>
				<input type="checkbox" name="hoby[]" value="Fangirlig">Fangirling<br>
				<input type="checkbox" name="hoby[]" value="Dance">Dance
			</td>
			<td>
				<input type="checkbox" name="hoby[]" value="Menulis">Menulis<br>
				<input type="checkbox" name="hoby[]" value="Other Hobby">Dan lain-lain
			</td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
		<tr>
			<td><li><b>Genre Film :</b></li></td>
		</tr>
		<tr>
			<td>
				<input type="checkbox" name="film[]" value="Horror">Horror<br>
				<input type="checkbox" name="film[]" value="Action">Action 
			</td>
			<td>
				<input type="checkbox" name="film[]" value="Anime">Anime<br>
				<input type="checkbox" name="film[]" value="Thriller">Thiller
			</td>
			<td>
				<input type="checkbox" name="film[]" value="Animasi">Animasi
			</td>
		</tr>
		<tr>
			<td><br></td>
		</tr>
		<tr>
			<td><li><b>Travelling Destination :</b></li></td>
		</tr>
		<tr>
			<td>
				<input type="checkbox" name="travel[]" value="Bali">Bali<br>
				<input type="checkbox" name="travel[]" value="Raja Ampat">Raja Ampat 
			</td>
			<td>
				<input type="checkbox" name="travel[]" value="Pulau Derawan">Pulau Derawan<br>
				<input type="checkbox" name="travel[]" value="Bangka Belitung">Bangka Belitung
			</td>
			<td>
				<input type="checkbox" name="travel[]" value="Labuan Bajo">Labuan Bajo<br>
			</td>
		</tr>
		<tr>
			<td><br></td>
		</tr>

		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><center><input type="submit" name="simpan" value="Submit" style="font-family:mimich;color: black; width: 100px;height: 40px;border-radius: 10px"></center></td>
		</tr>	

		</ul>
	</table>

<?php
	if(isset($_POST['simpan'])) {
		$hobby = $_POST['hoby'];
		$genref = $_POST['film'];
		$tdestin = $_POST['travel'];
		$poto = $_FILES["poto"]["name"];

		echo "<br><br><br>";
		echo "<hr>";

		$uploaddir = 'gambar/';
    	$uploadfile = $uploaddir . basename($_FILES['poto']['name']);

    	echo "<p>";

    	

	?>
	<center>
<table style="width: 20%; height: 10%; border-radius: 10%">
	<tr>
		<td colspan="2" align="center"><h3>Your Result</h3></td>
	</tr>	
	<tr>
		<td><b>Hobby : </b></td>
		<td align="center">
			<?php
				foreach ($hobby as $a) {
					echo $a."<br>";
				}
			?>		
		</td>
	</tr>
	<tr>
		<td><b>Genre : </b></td>
		<td align="center">
			<?php
				foreach ($genref as $b) {
					echo $b."<br>";
				}
			?>
		</td>
	</tr>
	<tr>
		<td><b>Travel Destination : </b></td>
		<td align="center">
			<?php
				foreach ($tdestin as $c) {
					echo $c."<br>";
				}
			?>	
		</td>
	</tr>

	<tr>
		<td>Gambar : </td>
		<td>
			<?php
				if (move_uploaded_file($_FILES['poto']['tmp_name'], $uploadfile)) {
      				echo "<img src='gambar/$poto' style='width:200px;height:200px'>";	
    			} else {
       				echo "Upload failed";
    			}
			?>
		</td>

	</tr>
</table>
	<?php		

	}
?>


</body>
