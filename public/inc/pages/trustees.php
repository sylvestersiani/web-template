
<?php 
function trustees($name, $title, $image="#", $text=''){
?>
	<div class="trustees">
		<div class="inner-wrapper">
			<div class="trustess-details">
				<h1>
					<?php 
						if (isset($name) && isset($title)) {
							echo $name . ' <br /> ' . '<span style="font-size: 14px;">' . $title .'</span>';
						}else{echo 'Staff';}
					?>	
				</h1>
			</div>
			<img src="<?php isset($image)? print($image): '#'; ?>">
			<div class="trustess-details">
				<p>
					<?php 
						if (isset($text)) {
							echo wordwrap($text, 20);
						}else{echo '';}
					?>
				</p>

			</div>
		</div>
	</div>

<?php
}
?>





<?php 
	trustees('Dalie', 'Co-Founder &amp; CEO', 'public/img/dalie.jpg','Dalie is an education professional with a background in the voluntary sector.  With a degree in International Relations, Dalie has always been passionate about societal development, especially in the Third World, and equal opportunities for all.
In 2015, Dalie’s father fell ill and was eventually diagnosed with Alzheimer’s disease. Dalie was forced to become her father’s full-time Carer for 9 months and experienced first-hand the challenges caused by sudden mental illness in a person’s life. With mental disease being somewhat of a foreign subject within Congolese circles, Dalie and her immediate family faced a lot of prejudice and stigma from their community, and consequently had to hide their plight. This led Dalie to embarked on a journey to start up an organisation which would essentially eradicate this stigma, and help towards supporting mental health sufferers and their families within African communities, to live supportive lives, free of stigma or social bias.
Dalie firmly believes that no illness or disability should be viewed with so much disdain that sufferers do not reach out for help.  Dalie also has a firm belief in the power of education and arts, and the ability these factors have in changing mindsets and perceptions of people - hence the inception of Kwetu.  Moreover, as an advocate for social justice, Dalie feels that her ultimate purpose in life is to bridge gaps of inequality within society.' );


	trustees('Lydia Mumba', 'Co-Founder & Trustee', 'public/img/lydia.jpg', 'After having gone through challenging times as a result of her father falling ill with Alzheimer’s dementia, Lydia Mumba joined forces with her sister to found Kwetu.
Lydia has a degree in Psychology from the University of Roehampton and is particularly interested in relationship building.  Aside from her day job at the Nursing & Mid-wifery council, Lydia dedicates much of her time to building networks and promoting organisations doing great things.
With much insight on social media marketing, Lydia currently manages Kwetu’s social media presence.
');



trustees('Michael Otadenede', 'Trustee & Acting Chair', 'public/img/michael.jpg', 'Michael has considerable experience in corporate social responsibility, and has developed his expertise primarily designing and delivering community affairs programmes for large scale corporates and third sector organisations. His approach centres on stakeholder engagement – both internally and externally – and project management – from strategy to delivery & through to impact measurement.
Michael is also the Co-founder of Young Professional Congolese (YPC), the first UK based network for young Congolese professionals, which aims to build a visible and active network of young professional Congolese across the UK. 
With a passion towards community affairs and societal development, Michael’s reputation within the Congolese community (as an African subgroup) as well as his experience in setting up and establishing a community-focused start-up will prove pivotal in the growth here at Kwetu.
');
?>

