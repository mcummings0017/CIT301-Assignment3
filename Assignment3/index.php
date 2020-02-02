<?php
require_once('functions.php');
$listings=jsonToArray('data.json');
require_once('header.php');
require_once('nav.php');
?>
   <div class="container">
		<h1>All Listings</h1>
		<?php
		$remaining = count($listings);
		$numRows = ceil(count($listings)/3);
		echo '<ul class="list-group list-group-flush"';
		echo '<div class="container">';
		for($i=0;$i<$numRows;$i++){
			$one = $i;
			$two = $i+1;
			$three = $i+2;
			echo '<div class="row">';
			if ($remaining >= 3) {
				echo '<div class="col-4 border border-dark bg-secondary text-white">
					  <img src="'.$listings[$one]['picture'].'" class="mr-3" alt="..." style="max-width:96px;max-height:96px">
					  <div class="media-body">
						<h5 class="mt-0">'.$listings[$one]['name'].'</h5>
						<p>Price: '.$listings[$one]['price'].'</p>
						<p><a href="detail.php?id='.$one.'">Click to see details</a></p>
					  </div>
					</div>';
				echo '<div class="col-4 border border-dark bg-secondary text-white">
					  <img src="'.$listings[$two]['picture'].'" class="mr-3" alt="..." style="max-width:96px;max-height:96px">
					  <div class="media-body">
						<h5 class="mt-0">'.$listings[$two]['name'].'</h5>
						<p>Price: '.$listings[$two]['price'].'</p>
						<p><a href="detail.php?id='.$two.'">Click to see details</a></p>
					  </div>
					</div>';
				echo '<div class="col-4 border border-dark bg-secondary text-white">
					  <img src="'.$listings[$three]['picture'].'" class="mr-3" alt="..." style="max-width:96px;max-height:96px">
					  <div class="media-body">
						<h5 class="mt-0">'.$listings[$three]['name'].'</h5>
						<p>Price: '.$listings[$three]['price'].'</p>
						<p><a href="detail.php?id='.$three.'">Click to see details</a></p>
					  </div>
					</div>';
				$remaining = $remaining - 3;
			} else if($remaining == 2) {
					echo '<div class="col-4 border border-dark bg-secondary text-white">
					  <img src="'.$listings[$one]['picture'].'" class="mr-3" alt="..." style="max-width:96px;max-height:96px">
					  <div class="media-body">
						<h5 class="mt-0">'.$listings[$one]['name'].'</h5>
						<p>Price: '.$listings[$one]['price'].'</p>
						<p><a href="detail.php?id='.$one.'">Click to see details</a></p>
					  </div>
					</div>';
					echo '<div class="col-4 border border-dark bg-secondary text-white">
					  <img src="'.$listings[$two]['picture'].'" class="mr-3" alt="..." style="max-width:96px;max-height:96px">
					  <div class="media-body">
						<h5 class="mt-0">'.$listings[$two]['name'].'</h5>
						<p>Price: '.$listings[$two]['price'].'</p>
						<p><a href="detail.php?id='.$two.'">Click to see details</a></p>
					  </div>
					</div>';
					$remaining = $remaining - 2;
			}
			else if ($remaining == 1) {
					echo '<div class="col-4 border border-dark bg-secondary text-white">
					  <img src="'.$listings[$one]['picture'].'" class="mr-3" alt="..." style="max-width:96px;max-height:96px">
					  <div class="media-body">
						<h5 class="mt-0">'.$listings[$one]['name'].'</h5>
						<p>Price: '.$listings[$one]['price'].'</p>
						<p><a href="detail.php?id='.$one.'">Click to see details</a></p>
					  </div>
					</div>';
					$remaining = $remaining - 1;
			}
			echo '</div>';
		}
		echo '</div>';
		echo '</ul>';

		?>
	</div>
<?php
require_once('footer.php');
?>