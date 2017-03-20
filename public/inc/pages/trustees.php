
<style type="text/css">
	.trustees{
		
		height: 300px;
		background-color: black;
		color: #fff;
		margin-top: 20px;
		border-radius: 5px;
		padding: 20px;
	}

.trustees > div{
	margin: auto;
	width: 90%;
}

.trustess-details{
	width: 60%;
	float: left;
	margin-right: 30px;
}
.trustees  img{
	float: right;
	width:auto;
	height: 250px;
}

</style>




<?php 



function trustees($name, $image="#"){
?>

	<div class="trustees">
		<div>
			<div class="trustess-details">
				<h1><?php isset($name)? print($name): 'staff'; ?></h1>
				<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
			</div>
			<img src="<?php isset($image)? print($image): '#'; ?>">
		</div>
	</div>

<?php
}
?>





<?php 
	trustees('Dalie', 'https://gm1.ggpht.com/90d38OwZt_BwFmMqaT6QOiQEyDAhO-Ji_GSZFUX3AKWqp9tblaHDUgOb5h1yfRDVDqAeUPaRT12CSA8PzmssSZ1U0UCyiY1rLTLLLraH49BCThT-9IgDpjactem40JTHZ9ChtMqpRAWbBN2rWzybnZ76fLTdfEE0dvmq_Aqi5vBNhz9ugIkPBBA2t5vM6GT1qgKKvFpYa6oPaL_MnMiQiRhjGzuvb7l5gNv9Z98dAhpm6TMvA1tfeEu8wigiDijUHJBMlb6nQbtf6536Ua4s975C7ibMG_ASkR9X0BmZ_0p8utgujOzyNOeui46VFIPZxbQoaUR32VlzQudeLbNnTSrWOFBo5HzCPRQOJo5kMyYFp1ZbQbPUl-p0lep7Ex1fNC1WD4AFp3XeL7N_0pybskbagtnAJlIEVbnGW5KFyhzUtKL60gk2zDzYLTJmHhaW5n4gtlWEQJWFMfGHjqS3J089aZ5blPbHVhpk6O_L7xXf_zsrq0NM01RE4_hJvf1WiuW0BjFW9bKMdwcnK7zj1K494WSYzVzg_jXfEn3u15lQbELEirhuwliWoutKVznE1ocytIl2Y7h3Nf3rweRuO1nRfD9hc2RsLU1guag1iuRiLJA9BrAlguWfxk3a_cC-F6hOdxN1Pfx4K4lMzyFuqmRTppS9jQtUhzrt7cIOepOM1S_gBbuXsjeV_0C0bfS8AA1AVz50MMbtIhAi1UTc7m2hbXE=w2358-h1138-l75-ft');

	trustees('Michael', 'https://mail.google.com/mail/u/1/?ui=2&ik=27dd3c904c&view=fimg&th=15ae77fe208911b7&attid=0.2&disp=inline&realattid=f_j0gvvtrs1&safe=1&attbid=ANGjdJ8ekJNd9X5iJ4iguVcXsjbxptx_slaB-0PfbtTWyolc550cWRcsew0V0SBY8TOswOesSL-4b2xaqauLOBY1pcPOkwvFsgFzPnz0MOH4WRTR_yHhECEQclGQhCU&ats=1489977611506&rm=15ae77fe208911b7&zw&sz=w2358-h1138');

	trustees('Staff 3', 'https://gm1.ggpht.com/s5nWD4llrUsgQclfgLnxWr_Ct6P4bzNTKiRsaLGJCEvZ-I7URM_HGmO5b27myd4qSAAEUSWIO8X4VKDfWXCVPG4X_m2ZUwFRc720bII6XV4J78H0xXmqT0xZu7aBgkqQlNS4CKgQoZBaToX1gwXqFudbBzZQVsFYPvv4TKdxp_88XI-DCb_cjVuU8zCQ0dw4nv8164UPQ6nRarwogoEw3kbK11_XELxabwgSuRkmMpzkOdz4TCa5d4mNUZnGyLn2AuZw9BqSQo62hLuAkXEeMHRMSP3-7pSjTCwr2Db0_eFbpsT6WLBCpZNYTmMP0QJRlMhGxYIaIs77YzXrZQkxmpRiWTUFsMwVTJpSN23m77HSoSFv7DZXgycq1IRgqUCZYxh5zPUJIbLF9a8RnTohxqItSljlnrmUlbOWw76tcqSwl2LrQ2agra9rq7yKSlfhGnhhdidVkHBJpvrOyaNnTHpPVYpw2bu2el3Y-DwV2kKS_7zKg8MDzh2rT1ISLaQoN4yuYBPh5g-8f-fZr63th7q7TC9LtSFHQKtg-kQnsTzsNEDMq_sSSWyiUEkmEHBSjMffLNu5KnaXTzySMXbA9OiFxS28xJhaw9qzzxqD8Am9fmqVO6Y6llBhL2WlqFanH_sHZot4V0sIzObByZX8OEcN94xpsquZOnorAZmx4oIVZycc8BylMp4j8yka8aTLjhy8sepBO2YHR_0gFSDCBkNv7SSu7A=w2358-h1138-l75-ft');


?>

