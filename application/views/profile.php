<div class="gsc-container-fashe5">
	<div class="profile-container-fashe5">
		<div class="account-profile-info-fashe5">
			<div class="the-info-fashe5">
			<div class="up-info-fashe5">
				<div class="account-img-fashe5">
				</div>
				<div class="account-left-info">
					<div class="account-name-fashe5">
					<?php echo "<span style='font-weight:200;'>".$first_name."</span><span style='font-weight:600;'> ".$last_name."</span>";?>
					</div>
					<div class="account-position-fashe5">
					<?php echo $position;?>
					</div>
					<div class="account-committee-fashe5">
						<?php echo $committe; ?> 
					</div>
				</div>
				<div class="account-right-info">
					
						
						<div class="account-rank-logo-fashe5">
				
						</div>
						<!--<div class="account-rank-name-fashe5"><?php //echo $rank_id; ?></div>-->
					
				</div>
				</div>
				
				<center>
				<div class="account-money-fashe5">
				<div class="money-container-fashe5-again">
							<div class="gollar-sign-cont-fashe5">
								<div class="gollar-sign-fashe5-info"></div>
							</div>
							<div class="money-value-fashe5-again">
								<div class="money-value-text-fashe5"><?php echo number_format($money).".00";?></div>								
							</div>
							
				</div>
				<div class="account-xp-fashe5-again">
					<div class="xp-cont-fashe5">
						XP
					</div>
					<div class="exp-text-fashe5"style="margin-top:8px;"><?php echo $exp;?></div>
				</div>
				</div>
				</center>		
						
			</div>
			
			
			
			
			
		</div>
		<div class="account-padges-info-fashe5">
			<span class="badges-info-title">Badges : </span>
			<div class="badges-cont-fashe5">
			<?php for($i=0;$i<8;$i++): ?>
				<div class="badges-model-fashe5">
					<div class="badges-model-img" style="background:url(<?php echo base_url("assets/img/GSC_Badges/starpadte.png");?>);"></div>
					<div class="badges-model-title" >Badge <? echo $i; ?></div>
				</div>
			<?php endfor; ?>
			</div>
		</div>
		<div class="account-actioncards-info-fashe5">

		</div>
		<div class="account-settings-info-fashe5">
		</div>
	</div>
</div>