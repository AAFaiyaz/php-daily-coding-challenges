<style>
	.coin {
		background: #999999;
		color: #333333;
		border-radius: 50%;
		padding: 50px;
		text-align: center;
		font-size: 2rem;
		font-weight: bold;
		width: 50px;
	}
</style>

<?php

function flip() {
	// Challenge: define this function
	// $result = rand(0,2);
	// if ($result<1){
	// 	echo 'heads';
	// }else {
	// 	echo 'tails';
	// }
	return (0 == rand(0,1) ? 'Heads' : 'Tails');
}

?>

<div class="coin">
	<?php echo flip(); ?>
</div>