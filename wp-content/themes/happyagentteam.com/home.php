<?php get_header(); ?>

	<!-- your home html -->
	<!-- Banner -->
	<section class="hp-slideshow">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Hp Slideshow") ) : ?><?php endif ?>		
	</section>

	<!-- Hp Search -->
	<section class="hp-quick-search container">
		<h2>Quick Search</h2>
		<form class="comp-search-container">
			<div class="qs-xl">
				<select aria-label="zip code">
					<option value="volvo">City or Zip Code</option>
					<option value="saab">Saab</option>
					<option value="mercedes">Mercedes</option>
					<option value="audi">Audi</option>
				</select>
			</div>
			<div class="qs-lg">
				<select aria-label="property type">
					<option value="volvo">Property Type</option>
					<option value="saab">Saab</option>
					<option value="mercedes">Mercedes</option>
					<option value="audi">Audi</option>
				</select>
			</div>
			<div class="qs-sm">
				<select aria-label="beds">
					<option value="volvo">Beds</option>
					<option value="saab">Saab</option>
					<option value="mercedes">Mercedes</option>
					<option value="audi">Audi</option>
				</select>
			</div>
			<div class="qs-sm">
				<select aria-label="baths">
					<option value="volvo">Baths</option>
					<option value="saab">Saab</option>
					<option value="mercedes">Mercedes</option>
					<option value="audi">Audi</option>
				</select>
			</div>
			<div class="qs-md">
				<input type="text" aria-label="min price" placeholder="Min. Price">
			</div>
			<div class="qs-md">
				<input type="text" aria-label="max price" placeholder="Max. Price">
			</div>
			<div class="qs-btn">
				<a href="#" class="serch-btn-primary" aria-label="qs">search</a>
				<input class="serch-btn-secondary" type="submit" value="advance" />
			</div>
		</form>
	</section>

	<!-- Hp Properties -->
	<section class="hp-properties">

		
		<div class="fp-slick-wrapper">
			<div class="container">
				<div class="fp-slick-1">
					<div>
						<div class="fp-content">
							<a href="#"><img alt="dining room" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/fp-img-1.jpg"></a>
							<div class="fp-description">
								<h2 class="primary-text">Featured</h2>
								<h3 class="secondary-text">Properties</h3>
								<p class="fp-primary-style">1700 East Walnut Avenue Suite&nbsp;400 El Segundo CA 90245</p>
								<h3 class="fp-secondary-style">$4,555,000</h3>
								<div class="global-btn">
									<a href="#">View more details</a>
								</div>
							</div>
						</div>
					</div>
					<div>
						<div class="fp-content">
							<a href="#"><img alt="dining room" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/fp-img-1.jpg"></a>
							<div class="fp-description">
								<h2 class="primary-text">Featured</h2>
								<h3 class="secondary-text">Properties</h3>
								<p class="fp-primary-style">1700 East Walnut Avenue Suite&nbsp;400 El Segundo CA 90245</p>
								<h3 class="fp-secondary-style">$4,555,000</h3>
								<div class="global-btn">
									<a href="#">View more details</a>
								</div>
							</div>
						</div>
					</div>
					<div>
						<div class="fp-content">
							<a href="#"><img alt="dining room" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/fp-img-1.jpg"></a>
							<div class="fp-description">
								<h2 class="primary-text">Featured</h2>
								<h3 class="secondary-text">Properties</h3>
								<p class="fp-primary-style">1700 East Walnut Avenue Suite&nbsp;400 El Segundo CA 90245</p>
								<h3 class="fp-secondary-style">$4,555,000</h3>
								<div class="global-btn">
									<a href="#">View more details</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="arrow-holder">
					<div class="arrow-btn prev">
						<button class="ai-font-arrow-b-p" >Previous</button>
					</div>
					<div class="arrow-btn next">
						<button class="ai-font-arrow-b-n" >Next</button>
					</div>
				</div>
			</div>
		</div>

		<div class="fp-slick-wrapper fp-line-left">
			<div class="container">
				<div class="fp-slick-2">
					<div>
						<div class="fp-content">
							<div class="fp-description">
								<h2 class="primary-text">Coming</h2>
								<h3 class="secondary-text">Soon</h3>
								<p class="fp-primary-style">1700 East Walnut Avenue Suite&nbsp;400 El Segundo CA 90245</p>
								<h3 class="fp-secondary-style">$4,555,000</h3>
								<div class="global-btn">
									<a href="#">View more details</a>
								</div>
							</div>
								<a href="#"><img alt="A sofa and pictures on the wall" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/fp-img-2.jpg"></a>
						</div>
					</div>
					<div>
						<div class="fp-content">
							<div class="fp-description">
								<h2 class="primary-text">Coming</h2>
								<h3 class="secondary-text">Soon</h3>
								<p class="fp-primary-style">1700 East Walnut Avenue Suite&nbsp;400 El Segundo CA 90245</p>
								<h3 class="fp-secondary-style">$4,555,000</h3>
								<div class="global-btn">
									<a href="#">View more details</a>
								</div>
							</div>
							<a href="#"><img alt="A sofa and pictures on the wall" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/fp-img-2.jpg"></a>
						</div>
					</div>
					<div>
						<div class="fp-content">
							<div class="fp-description">
								<h2 class="primary-text">Coming</h2>
								<h3 class="secondary-text">Soon</h3>
								<p class="fp-primary-style">1700 East Walnut Avenue Suite&nbsp;400 El Segundo CA 90245</p>
								<h3 class="fp-secondary-style">$4,555,000</h3>
								<div class="global-btn">
									<a href="#">View more details</a>
								</div>
							</div>
							<a href="#"><img alt="A sofa and pictures on the wall" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/fp-img-2.jpg"></a>
						</div>
					</div>
				</div>
				<div class="arrow-holder arrow-left">
					<div class="arrow-btn prev">
						<button class="ai-font-arrow-b-p" >Previous</button>
					</div>
					<div class="arrow-btn next">
						<button class="ai-font-arrow-b-n" >Next</button>
					</div>
				</div>
			</div>
		</div>

		<div class="fp-slick-wrapper">
			<div class="container">
				<div class="fp-slick-3">
					<div>
						<div class="fp-content">
							<a href="#"><img alt="A Book and living room armchair" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/fp-img-3.jpg"></a>
							<div class="fp-description">
								<h2 class="primary-text">Pending</h2>
								<h3 class="secondary-text">Properties</h3>
								<p class="fp-primary-style">1700 East Walnut Avenue Suite&nbsp;400 El Segundo CA 90245</p>
								<h3 class="fp-secondary-style">$4,555,000</h3>
								<div class="global-btn">
									<a href="#">View more details</a>
								</div>
							</div>
						</div>
					</div>
					<div>
						<div class="fp-content">
							<a href="#"><img alt="A Book and living room armchair" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/fp-img-3.jpg"></a>
							<div class="fp-description">
								<h2 class="primary-text">Pending</h2>
								<h3 class="secondary-text">Properties</h3>
								<p class="fp-primary-style">1700 East Walnut Avenue Suite&nbsp;400 El Segundo CA 90245</p>
								<h3 class="fp-secondary-style">$4,555,000</h3>
								<div class="global-btn">
									<a href="#">View more details</a>
								</div>
							</div>
						</div>
					</div>
					<div>
						<div class="fp-content">
							<a href="#"><img alt="A Book and living room armchair" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/fp-img-3.jpg"></a>
							<div class="fp-description">
								<h2 class="primary-text">Pending</h2>
								<h3 class="secondary-text">Properties</h3>
								<p class="fp-primary-style">1700 East Walnut Avenue Suite&nbsp;400 El Segundo CA 90245</p>
								<h3 class="fp-secondary-style">$4,555,000</h3>
								<div class="global-btn">
									<a href="#">View more details</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="arrow-holder">
					<div class="arrow-btn prev">
						<button class="ai-font-arrow-b-p" >Previous</button>
					</div>
					<div class="arrow-btn next">
						<button class="ai-font-arrow-b-n" >Next</button>
					</div>
				</div>
			</div>
		</div>

	</section>

	<!-- Hp Communities -->
	<section class="hp-communities">
		<div class="map-wrap">
			<div class="map-inner">
				<div class="fc-title">
					<h2 class="primary-text">Featured</h2>
					<h3 class="secondary-text">Communities</h3>
				</div>
					<img alt="map-areas" src="<?php echo get_stylesheet_directory_uri()?>/images/map/frame-1.jpg" width="1600" height="1187" border="0" usemap="#Map" />
					<map name="Map" id="Map">
						<area data-area-id="1" shape="poly" coords="951,1067,956,1059,953,1054,954,1047,954,1043,951,1037,950,1027,952,1021,952,1015,948,1011,945,1006,943,1003,939,1001,936,1000,933,998,929,994,925,989,923,987,920,983,919,981,919,977,921,970,917,964,914,962,911,958,909,958,905,958,902,960,898,964,893,969,893,974,891,978,887,980,883,980,878,983,874,987,869,984,863,982,858,981,856,978,854,975,852,973,849,972,845,968,838,968,836,970,832,974,830,979,827,982,822,988,815,990,810,990,801,987,790,984,786,984,782,985,782,991,785,997,786,1002,790,1006,791,1011,794,1016,793,1020,795,1027,795,1033,795,1040,799,1044,805,1044,808,1041,811,1039,813,1039,815,1042,821,1043,831,1048,840,1049,835,1050,834,1055,835,1060,835,1067,837,1070,842,1073,849,1073,854,1072,860,1072,861,1071,866,1070,871,1069,875,1071,879,1072,886,1071,890,1069,895,1070,899,1070,899,1065,905,1064,906,1071,908,1074,912,1074,913,1077,916,1080,918,1082,925,1080,928,1076,936,1075,939,1072,944,1070,947,1068" alt="frame-1" href="#" />

						<area data-area-id="1" shape="poly" coords="813,830,817,826,820,819,824,819,825,814,821,812,818,813,816,814,813,815,808,822,805,819,802,818,797,816,795,815,799,812,796,808,792,808,790,808,790,811,790,819,790,824,787,825,784,826,786,833,784,835,781,833,777,830,775,830,777,834,774,835,770,835,767,835,760,831,753,835,750,839,746,840,741,841,735,839,731,839,726,840,723,841,730,872,734,873,733,874,730,876,731,896,726,900,727,902,731,900,737,914,737,917,737,925,737,932,737,938,738,943,740,943,748,960,750,961,755,958,757,959,760,959,765,961,769,964,771,964,777,965,781,967,786,969,790,970,791,965,788,963,788,959,791,959,794,959,799,957,798,954,798,949,794,949,791,947,791,944,791,942,792,938,792,933,792,926,794,921,798,915,799,910,804,906,807,906,813,906,816,906,815,909,815,914,819,915,822,916,823,915,829,915,832,915,836,915,841,915,841,910,842,911,846,915,848,916,852,915,850,911,857,912,858,912,854,906,858,904,849,891,852,890,850,885,849,881,842,879,841,873,839,868,835,865,837,863,840,861,863,876,866,876,865,871,867,869,870,869,867,872,867,876,886,877,885,880,882,882,880,883,878,886,887,894,894,895,894,857,888,856,885,839,884,834,895,834,896,839,900,837,904,833,915,833,914,838,932,838,933,857,961,857,961,853,958,848,959,840,942,839,941,835,933,833,932,826,912,825,911,819,886,820,881,821,879,822,878,826,875,828,876,830,872,835,871,836,869,840,861,843,859,845,856,848,852,848,851,846,853,845,855,840,854,837,847,837,843,839,835,839,832,838,828,836,822,836,819,833" alt="frame-1" href="#" />

						<area data-area-id="1" shape="poly" coords="1107,792,1101,792,1100,785,1093,784,1092,771,1014,794,1015,796,1014,800,1014,803,1010,803,987,803,987,813,1003,815,1013,815,1021,815,1028,815,1033,814,1036,812,1042,812,1104,813,1106,813,1107,806,1108,804,1108,801,1108,795" alt="frame-1" href="#" />

						<area data-area-id="1" shape="poly" coords="1126,813,1125,806,1120,808,1118,805,1115,807,1114,809,1111,810,1111,812,1110,812,1104,812,1101,812,1100,815,1100,818,1104,819,1105,819,1107,821,1114,820,1115,825,1119,826,1119,842,1121,844,1122,848,1120,850,1122,854,1126,853,1128,853,1132,851,1130,846,1132,845,1138,846,1143,845,1143,841,1140,840,1140,838,1143,837,1146,834,1146,831,1149,829,1150,827,1151,829,1156,833,1167,832,1167,829,1167,805,1164,804,1162,802,1165,802,1164,799,1162,798,1159,795,1156,798,1154,798,1152,795,1148,796,1144,796,1142,800,1142,803,1142,807,1141,811,1143,813,1141,813,1136,812,1134,815,1131,814" alt="frame-1" href="#" />

						<area data-area-id="1" shape="poly" coords="1097,815,1037,814,1033,817,1012,818,1017,822,1014,825,1014,828,1022,830,1022,834,1023,838,1029,840,1030,851,1034,853,1037,852,1041,850,1042,848,1047,849,1046,850,1043,850,1043,853,1044,855,1039,856,1039,865,1041,868,1043,868,1044,883,1049,888,1048,891,1049,893,1052,895,1054,899,1057,899,1060,896,1062,894,1063,894,1065,898,1068,898,1070,897,1072,895,1072,892,1071,889,1068,889,1064,890,1061,892,1058,892,1057,889,1055,887,1055,884,1059,881,1060,877,1062,876,1064,876,1065,877,1066,881,1069,883,1072,883,1073,883,1077,882,1078,879,1080,879,1083,879,1081,880,1082,883,1081,884,1079,886,1079,891,1080,896,1087,895,1091,894,1091,891,1093,889,1094,871,1110,884,1112,884,1110,865,1114,864,1114,866,1118,867,1118,877,1126,882,1126,886,1130,892,1129,899,1133,893,1136,888,1137,883,1139,881,1138,876,1137,873,1135,871,1133,866,1129,864,1123,864,1122,860,1120,859,1115,856,1113,854,1110,851,1113,849,1112,847,1110,845,1108,845,1105,845,1099,846,1109,842,1108,839,1101,840,1098,840,1094,840,1092,837,1091,835,1090,830,1091,827,1094,826,1095,823,1100,824,1099,819" alt="frame-1" href="#" />

						<area data-area-id="1" shape="poly" coords="663,741,665,738,674,731,675,725,675,719,674,715,672,712,667,711,661,707,657,705,655,702,650,701,646,699,644,695,639,696,638,693,636,691,634,695,635,691,631,690,628,690,626,687,623,685,620,680,616,679,613,677,609,677,605,677,602,679,598,679,591,679,585,678,553,670,552,675,553,686,554,688,555,691,557,695,561,695,566,697,569,699,572,701,576,702,580,701,578,696,578,694,581,694,583,694,586,694,589,695,590,695,590,698,589,700,586,701,583,701,584,704,586,704,585,706,588,706,591,707,592,708,593,708,596,710,599,711,601,713,603,717,607,718,610,718,610,716,606,714,608,709,608,713,612,713,615,714,616,714,617,719,622,721,625,723,629,725,638,728,641,730,647,732,653,734,658,737,659,741,645,741,637,745,635,748,633,751,663,782,670,771,673,772,673,764,674,741,670,741,667,741" alt="frame-1" href="#" />
						
						<area data-area-id="1" shape="poly" coords="606,607,604,603,603,599,602,595,601,592,598,589,592,591,587,592,588,596,589,597,589,601,588,602,584,602,580,604,575,602,574,606,577,608,583,607,588,607,591,607,594,612,597,615,602,617,607,619,610,616,609,613,609,610" alt="frame-1" href="#" />

						<area data-area-id="1" shape="poly" coords="632,508,625,505,615,508,613,510,609,511,605,512,603,514,602,518,602,528,610,528,610,532,609,536,607,538,605,538,599,537,574,540,577,557,577,558,571,556,568,552,564,550,560,550,560,553,560,556,566,561,571,561,571,564,569,566,567,566,567,570,567,574,570,574,572,571,576,569,579,567,581,568,581,576,584,572,584,574,584,577,586,580,587,584,588,588,589,591,591,591,596,591,599,591,602,589,604,588,606,588,609,590,609,592,611,595,614,594,615,591,615,594,618,595,623,595,624,594,625,592,626,589,626,587,629,587,633,586,636,585,638,585,641,584,644,583,646,583,647,588,651,587,654,587,657,586,662,586,665,585,666,585,669,584,669,580,669,578,665,577,660,577,658,576,655,576,652,574,651,535,649,532,648,528,647,526,646,522,645,520,642,518,640,514,638,512,635,511" alt="frame-1" href="#" />

						<area data-area-id="1" shape="poly" coords="535,657,540,659,548,656,556,652,558,653,554,659,556,665,562,666,571,669,579,671,589,673,598,674,609,673,615,674,619,676,624,681,629,683,634,685,645,688,650,688,656,695,663,701,666,706,673,714,679,720,683,726,690,730,694,736,696,741,699,746,696,748,696,755,696,762,693,761,684,751,680,750,677,757,678,763,676,771,675,776,670,781,666,786,665,788,657,781,650,779,646,784,653,788,657,789,664,797,675,805,684,817,693,820,696,814,696,807,701,804,704,798,709,796,719,793,720,790,720,784,716,781,719,779,726,776,733,781,743,777,745,774,745,770,748,766,748,760,753,760,761,760,768,757,773,756,783,759,784,765,786,771,791,764,793,767,793,772,803,770,806,766,810,762,812,755,812,747,802,725,797,712,792,701,785,691,780,686,781,682,775,674,764,669,758,664,753,660,748,661,747,664,739,661,740,657,740,648,735,640,730,634,729,625,728,619,728,612,718,603,715,597,709,588,700,582,693,577,686,565,689,559,682,549,673,543,663,540,656,538,655,546,654,555,654,563,656,570,661,573,668,579,668,584,661,586,656,587,649,589,645,587,638,587,629,589,624,594,616,594,609,593,607,605,607,616,603,619,592,619,586,624,574,624,568,625,563,628,556,631,555,633,566,636,575,635,568,642,563,648,680,609,673,612,659,612,657,616,655,623,657,629,663,635,669,638,672,639,680,641,687,643,693,645,699,646,704,645,706,636,707,633,702,629,700,626,697,624,695,622,694,618,691,615,689,612,687,611,687,609,683,607,682,606,681,608" alt="frame-1" href="#" />

						<area data-area-id="1" shape="poly" coords="660,616,655,621,653,628,662,631,670,635,675,638,682,640,692,641,697,644,703,643,706,636,706,633,700,630,696,622,692,618,687,615,683,611,678,610,672,611,666,614,664,614" alt="frame-1" href="#" />
						
						<!--  -->
						
						<area data-area-id="2" shape="poly" coords="479,474,482,480,482,485,480,491,478,496,479,500,486,500,488,498,492,498,495,500,503,507,507,505,510,503,510,494,510,484,505,483,495,478,501,480,504,481,506,480,510,486,514,494,516,497,522,493,530,490,531,496,528,499,534,502,539,500,544,500,553,501,558,503,561,508,559,511,558,518,567,516,571,515,578,515,576,509,583,505,579,498,570,484,561,480,562,475,558,464,562,464,562,458,567,452,559,435,561,434,566,435,568,434,574,434,574,444,580,452,587,460,591,465,597,466,602,474,610,482,616,492,620,493,621,493,614,484,622,477,622,481,638,479,622,453,630,446,625,438,622,439,623,436,619,433,616,433,615,431,615,428,611,428,602,419,603,412,607,410,611,410,616,411,623,411,614,417,616,422,621,422,624,425,628,424,632,420,643,416,648,424,652,421,652,410,652,407,636,402,630,399,618,392,612,396,605,396,604,392,596,394,590,396,591,401,588,407,592,411,596,408,598,416,594,416,589,414,587,417,580,416,574,419,570,416,569,410,571,402,572,398,577,395,578,388,573,383,560,376,554,370,549,374,548,370,542,367,543,360,546,357,515,343,512,344,505,340,504,348,509,361,512,370,515,375,508,387,504,391,502,390,498,398,493,397,491,396,482,398,491,403,506,402,508,407,512,408,513,402,515,402,516,426,513,426,513,427,506,427,504,435,501,431,492,430,492,427,496,424,496,410,493,408,469,408,476,424,471,424,474,428,468,434,462,430,458,427,452,424,451,414,440,416,430,412,442,432,440,440,453,446,452,456,456,464,465,466,474,471,478,474" alt="frame-1" href="#" />

						<area data-area-id="2" shape="poly" coords="572,459,584,460,592,469,597,469,595,475,603,483,599,490,601,495,599,497,599,501,599,503,599,507,594,510,591,510,586,511,586,504,587,501,575,481,570,480,570,473,568,470,572,468,571,460" alt="frame-1" href="#" />

						<area data-area-id="2" shape="poly" coords="622,300,656,341,666,339,670,345,678,349,678,334,686,339,704,338,704,356,679,358,680,361,683,362,670,380,646,362,636,366,630,366,622,361,619,356,617,355,615,354,617,351,615,348,610,342,605,343,596,335,598,331,604,323,608,321,612,316,613,312,620,303" alt="frame-1" href="#" />

						<area data-area-id="2" shape="poly" coords="596,337,601,344,610,344,614,352,613,356,619,359,631,369,641,369,644,367,665,380,663,382,656,384,644,384,642,385,641,393,632,395,623,391,615,387,616,383,613,383,607,380,607,376,602,376,596,379,590,378,590,371,585,371,583,375,582,380,573,380,576,376,585,368,580,362,574,364,570,357,575,348,576,344,584,344,594,342,595,340" alt="frame-1" href="#" />
						
						<area data-area-id="2" shape="poly" coords="775,328,785,322,788,321,790,318,798,315,802,310,812,305,827,301,828,314,831,311,831,318,834,318,828,323,820,325,810,325,808,329,803,331,797,332,788,331,795,337,799,338,816,342,821,346,822,349,821,351,821,353,822,358,830,361,833,361,833,357,828,356,830,353,840,356,844,359,845,364,846,375,847,382,844,381,842,389,842,391,821,392,818,397,818,400,828,415,829,421,819,421,817,416,811,418,810,419,806,422,804,423,802,414,799,411,799,404,799,399,795,396,797,388,796,388,792,391,786,389,780,386,780,387,779,378,774,372,771,361,773,359,776,351,773,346,771,344,768,339,769,330,761,324,770,328,775,329" alt="frame-1" href="#" />
						
						<area data-area-id="2" shape="poly" coords="947,341,954,341,954,337,961,334,1002,376,1017,386,1025,393,1023,412,1027,412,1030,410,1032,429,1020,429,1016,434,1009,432,1008,429,1005,434,1009,438,1010,451,1017,452,1018,457,1016,458,1014,461,1002,460,1002,455,1000,456,999,472,994,472,991,474,986,472,982,473,974,473,971,469,973,465,966,455,959,449,950,443,947,442,921,465,917,463,912,464,911,460,908,453,890,464,890,454,886,456,888,445,885,428,887,425,883,413,879,417,876,408,879,405,877,393,887,382,883,361,894,347,898,341,910,339,911,332,919,327,922,323,944,336,946,341" alt="frame-1" href="#" />
						
						<area data-area-id="2" shape="poly" coords="853,398,856,395,858,389,870,390,877,404,874,405,876,418,883,417,886,424,883,428,887,441,886,449,885,455,886,468,890,471,891,479,893,479,890,484,879,484,879,464,864,462,860,472,849,473,846,464,841,456,842,455,843,442,830,436,830,429,840,429,831,408,829,405,825,403,832,397,835,393,853,396" alt="frame-1" href="#" />
						
						<area data-area-id="2" shape="poly" coords="891,484,896,480,893,475,893,470,887,467,906,454,909,458,910,462,914,464,918,464,922,465,940,448,940,448,946,450,953,448,956,451,966,457,971,462,969,468,974,475,969,482,970,490,965,492,960,493,952,492,951,501,942,499,944,503,948,507,949,521,947,524,950,534,934,541,937,555,927,553,928,563,923,562,923,553,920,553,920,565,915,562,910,562,907,564,897,548,892,548,891,544,887,541,885,541,880,541,877,542,875,543,871,540,875,535,874,528,876,527,866,522,863,523,863,519,854,518,862,514,862,513,855,509,861,506,864,503,867,499,860,499,859,495,856,498,850,497,832,496,832,494,831,490,840,487,841,481,843,481,845,474,860,472,864,464,880,464,881,482,888,484" alt="frame-1" href="#" />
						
						<area data-area-id="2" shape="poly" coords="803,497,804,477,807,473,806,466,811,466,820,451,826,452,827,457,830,457,833,463,829,469,829,473,835,472,835,482,830,483,829,489,831,493,830,497,843,497,847,497,853,501,851,506,849,511,849,513,853,520,850,527,846,531,845,537,841,535,843,553,843,558,853,576,851,591,845,591,843,587,821,587,826,578,821,577,822,568,818,565,823,555,812,550,802,554,796,552,792,552,787,549,787,556,782,554,780,559,776,560,763,555,763,539,754,540,754,538,749,534,750,525,750,496,756,496,756,491,766,493,780,488,780,491,786,490,787,497,802,497" alt="frame-1" href="#" />
						
						<area data-area-id="2" shape="poly" coords="725,546,716,538,694,546,684,539,679,530,689,520,692,519,694,522,699,519,693,505,697,502,698,500,705,499,711,482,717,478,733,481,736,483,746,482,754,491,756,495,750,497,750,534,755,537,752,540,760,541,762,555,776,563,778,584,781,590,779,595,775,605,763,599,759,602,750,595,746,592,742,592,743,588,725,588,721,585,716,577,717,570,716,565,705,563,716,556,719,547,724,547" alt="frame-1" href="#" />
						
						<area data-area-id="2" shape="poly" coords="819,589,842,587,841,599,837,607,835,606,836,612,832,617,831,626,823,627,824,634,813,633,809,643,813,649,798,644,799,640,793,632,778,630,764,617,761,602,774,606,781,589,778,586,778,573,778,565,780,557,782,555,786,555,788,548,792,551,801,553,806,553,813,552,822,556,818,564,822,572,824,578,819,588" alt="frame-1" href="#" />
						
						<area data-area-id="2" shape="poly" coords="844,540,865,538,869,543,870,551,879,556,880,566,889,567,888,600,873,601,873,596,856,580,854,576,844,557,843,542" alt="frame-1" href="#" />
						
						<area data-area-id="2" shape="poly" coords="923,565,928,565,928,553,938,555,935,540,951,535,949,524,949,514,958,515,965,512,973,529,996,545,997,550,1010,553,1010,557,1014,557,1018,564,1018,559,1020,560,1019,554,1033,565,1029,577,1043,586,1031,588,1045,600,1035,601,1031,598,1029,598,1025,605,1024,599,1014,600,1013,609,1008,612,1007,608,1009,606,1009,600,1007,596,1001,594,997,594,994,597,984,594,982,597,967,596,967,607,957,608,953,597,944,596,941,593,934,594,933,602,930,603,932,608,927,621,920,619,920,629,916,639,908,650,875,625,874,602,886,600,889,567,886,565,879,565,879,556,871,549,872,543,877,543,888,541,892,548,898,548,901,555,904,560,907,565,912,564,919,564,919,554,922,554,921,563" alt="frame-1" href="#" />
						
						<area data-area-id="2" shape="poly" coords="968,609,968,596,983,596,993,596,994,601,983,603,984,606,991,606,996,611,1032,622,1036,627,1038,635,1046,636,1049,639,1046,647,1047,664,1058,668,1064,667,1069,668,1070,665,1081,665,1083,677,1085,694,1073,695,1071,683,1043,682,1043,678,1031,677,1032,683,1023,683,1021,679,1016,677,1017,674,1010,673,1011,685,990,696,989,691,982,696,974,684,955,685,960,676,946,674,945,654,948,652,945,651,919,649,918,638,921,632,921,623,921,621,928,622,930,615,931,610,931,606,931,606,934,601,935,595,944,595,952,599,954,605,956,609,966,608" alt="frame-1" href="#" />
						
						<area data-area-id="2" shape="poly" coords="1039,707,1041,706,1044,712,1049,718,1054,728,1059,733,1061,728,1061,722,1061,716,1063,715,1061,720,1061,726,1059,736,1064,743,1071,748,1076,748,1090,756,1091,755,1095,738,1098,731,1095,719,1100,715,1098,711,1102,704,1098,694,1071,694,1072,685,1043,681,1041,677,1032,677,1033,683,1025,684,1014,673,1012,685,993,697,990,691,983,696,973,687,954,687,952,701,956,705,948,708,946,708,949,718,958,717,958,714,960,716,962,722,967,723,964,727,973,733,983,737,989,739,996,747,993,749,999,756,992,762,1000,764,1012,786,1060,773,1055,752,1050,749,1045,744,1040,746,1030,725,1038,718,1038,711" alt="frame-1" href="#" />
						
						<area data-area-id="2" shape="poly" coords="1021,432,1028,441,1038,434,1041,431,1086,431,1083,493,1088,492,1086,503,1076,495,1078,502,1068,502,1062,500,1054,500,1054,489,1044,489,1044,474,1041,474,1041,480,1033,468,1036,464,1035,459,1024,460,1023,448,1017,439,1018,434" alt="frame-1" href="#" />
						
						<area data-area-id="2" shape="poly" coords="1018,329,1025,330,1028,325,1033,325,1035,320,1029,315,1028,310,1038,311,1042,315,1046,313,1066,311,1066,308,1072,308,1078,295,1082,295,1089,303,1112,311,1118,310,1130,316,1135,315,1134,321,1132,329,1130,340,1140,342,1139,348,1116,343,1117,357,1110,357,1110,369,1076,369,1074,371,1073,366,1062,367,1057,367,1057,348,1054,349,1051,351,1046,351,1046,354,1038,356,1038,345,1038,341,1034,344,1032,347,1030,341,1028,337,1018,337,1018,345,1014,347,1015,362,1006,372,1004,363,1008,363,998,361,998,359,997,351,994,346,994,341,996,339,973,342,974,336,971,335,965,329,972,325,977,323,983,321,989,321,993,321,1007,325,1016,327,1018,327,1018,335" alt="frame-1" href="#" />
						
						<area data-area-id="2" shape="poly" coords="1140,342,1130,339,1133,332,1133,323,1136,320,1138,318,1146,314,1164,327,1175,323,1177,332,1188,337,1206,337,1206,344,1202,345,1199,343,1196,346,1199,345,1211,346,1209,337,1223,340,1223,335,1230,337,1229,340,1226,343,1224,365,1247,391,1249,405,1231,406,1230,436,1189,436,1188,444,1181,444,1181,439,1177,436,1152,438,1152,419,1154,415,1149,413,1153,406,1154,402,1143,401,1138,395,1124,397,1124,377,1112,377,1111,369,1124,368,1126,361,1124,356,1118,357,1117,345,1134,347,1138,348,1139,343" alt="frame-1" href="#" />
						
						<area data-area-id="2" shape="poly" coords="1232,524,1232,533,1231,543,1231,551,1236,555,1236,560,1230,556,1227,553,1228,558,1222,555,1217,554,1217,548,1212,548,1216,546,1211,539,1216,541,1215,533,1210,536,1205,537,1201,541,1200,518,1199,523,1193,526,1193,518,1195,517,1195,515,1194,510,1199,508,1199,477,1198,475,1214,475,1215,466,1241,466,1240,476,1246,478,1246,470,1253,469,1253,474,1249,474,1256,477,1256,476,1263,476,1262,508,1264,508,1265,525,1234,525" alt="frame-1" href="#" />
					</map>
					<img usemap="#Map" alt="logo" class="img-responsive map-trans" src="<?php echo get_stylesheet_directory_uri()?>/images/map/map-transparent.png">
					<div class="map-hover">
						<div class="map-hover-item map-hover-1" data-area-id="1">
							<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri()?>/images/map/alameda-frame-1.png" alt="maphover-1">
						</div>
						<div class="map-hover-item map-hover-2" data-area-id="2">
							<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri()?>/images/map/costa-frame-1.png" alt="maphover-1">
						</div>
					</div>
					<div class="map-details">
						<div class="frame-det-1 map-det-font" data-area-id="1">Alamenda<br>County </div>
						<div class="frame-det-1 map-det-font" data-area-id="1"> </div>
					</div>
			</div>
		</div>
	</section>

	<!-- Hp About -->
	<section class="hp-about-us">
		<div class="container comp-about-us-container">
			<div class="about-img">
				<img alt="author" class="img-responsive"  src="<?php echo get_stylesheet_directory_uri() ?>/images/about-img.png">
			</div>
			<div class="content">
				<h2 class="primary-text">About</h2>
				<h3 class="secondary-text">Patrice Sandstrom</h3>
				<p class="about-primary-text">It is with great pleasure that agent welcomes you to city, and to her website.</p>
				<p class="about-secondary-text">The search is over. Her website is designed to be your one-stop for real estate in sample city. This is the moment that you should enjoy the most; looking at the available properties in simple city; imagining yourself living in the home that you have always dreamed about. You don't want just another database that gives you rehashed property descriptions. You want to walk around the neighborhood from the comfort of your own homne, You want to get a clear picture about life in simple city.</p>
				<div class="global-btn">
					<a href="" class="primary-btn">Read more</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Hp About -->
	<section class="hp-team">
		<div class="container">
			<h2 class="primary-text">Meet</h2>
			<h3 class="secondary-text">The Team</h3>
	
			<div class="team-slick">
				<div class="team-slick-item">
					<div class="comp-team-container normal">
						<div class="content">
							<h2 class="team-primary-text">John Doe</h2>
							<h3 class="team-secondary-text">Realtor</h3>
							<p>
								Since Year, ABC Brokerage has been representing buyers and sellers all throughout the Sample City area.
							</p>
						</div>
						<img alt="author" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/team-img-1.jpg">
					</div>
					<div class="comp-team-container reverse">
						<img alt="author" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/team-img-2.jpg">
						<div class="content">
							<h2 class="team-primary-text">John Doe</h2>
							<h3 class="team-secondary-text">Realtor</h3>
							<p>
								Since Year, ABC Brokerage has been representing buyers and sellers all throughout the Sample City area.
							</p>
						</div>
					</div>
				</div>
				<div class="team-slick-item">
					<div class="comp-team-container normal">
						<div class="content">
							<h2 class="team-primary-text">John Doe</h2>
							<h3 class="team-secondary-text">Realtor</h3>
							<p>
								Since Year, ABC Brokerage has been representing buyers and sellers all throughout the Sample City area.
							</p>
						</div>
						<img alt="author" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/team-img-1.jpg">
					</div>
					<div class="comp-team-container reverse">
						<img alt="author" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/team-img-2.jpg">
						<div class="content">
							<h2 class="team-primary-text">John Doe</h2>
							<h3 class="team-secondary-text">Realtor</h3>
							<p>
								Since Year, ABC Brokerage has been representing buyers and sellers all throughout the Sample City area.
							</p>
						</div>
					</div>
				</div>
				<div class="team-slick-item">
					<div class="comp-team-container normal">
						<div class="content">
							<h2 class="team-primary-text">John Doe</h2>
							<h3 class="team-secondary-text">Realtor</h3>
							<p>
								Since Year, ABC Brokerage has been representing buyers and sellers all throughout the Sample City area.
							</p>
						</div>
						<img alt="author" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/team-img-1.jpg">
					</div>
					<div class="comp-team-container reverse">
						<img alt="author" class="img-responsive" src="<?php echo get_stylesheet_directory_uri() ?>/images/team-img-2.jpg">
						<div class="content">
							<h2 class="team-primary-text">John Doe</h2>
							<h3 class="team-secondary-text">Realtor</h3>
							<p>
								Since Year, ABC Brokerage has been representing buyers and sellers all throughout the Sample City area.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>

	<!-- Hp Vision -->
	<section class="hp-tagline">
		<p>
			At Sandstrom Group we believe successful results & a quality client experience are our responsibility. Our goal is to provide a #happyexperience for our #happysellers & #happybuyers. Give us the opportunity to exceed your expectations!
		</p>
	</section>

	<!-- Hp Vision -->
	<section class="hp-clients">
		<div class="client-flipster">
			<h2 class="primary-text">Our happy clients</h2>
			<h3>Jame Doe</h3>
			<h4>Realitor</h4>
			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque amet pariatur illum neque doloremque cupiditate? Quas enim facere aut deserunt eaque nostrum! Deleniti dolorem iure numquam corporis necessitatibus fugiat at?
			</p>
		</div>
		<div class="global-btn">
			<a href="" class="primary-btn">View all</a>
		</div>
	</section>

	<!-- Hp Social -->
	<section class="hp-social">
		<h2 class="primary-text">We're Social!</h2>
		<h3 class="secondary-text">Follow us</h3>
		<div class="comp-social-container">
			<div class="social-item"><a href="" class="ai-font-facebook"></a></div>
			<div class="social-item"><a href="" class="ai-font-instagram"></a></div>
			<div class="social-item"><a href="" class="ai-font-linkedin"></a></div>
			<div class="social-item"><a href="" class="ai-font-youtube"></a></div>
			<div class="social-item"><a href="" class="ai-font-yelp"></a></div>
		</div>
	</section>

	<!-- Hp git -->
	<section class="hp-git">
		<h2 class="primary-text">Get in Touch</h2>
		<div class="git-form">
			<div class="form-md pad-right">
				<label for="git-fname">Name</label>
				<input type="text" id="name" placeholder="Name">
			</div>
		
			<div class="form-md pad-right">
				<label for="git-email">Email</label>
				<input type="text" id="git-email" placeholder="Email">
			</div>
			
			<div class="form-lg">
				<label for="git-message">Message</label>
				<textarea  id="git-message" placeholder="Message"></textarea>
			</div>
			<div class="global-btn">
				<input type="submit" value="Send">
			</div>
		</div>

	</section>

	<ul class="comp-social-sidebar">
		<li class="social-item"><a href="#" class="ai-font-facebook"></a></li>
		<li class="social-item"><a href="#" class="ai-font-instagram"></a></li>
		<li class="social-item"><a href="#" class="ai-font-linkedin"></a></li>
		<li class="social-item"><a href="#" class="ai-font-youtube"></a></li>
		<li class="social-item"><a href="#" class="ai-font-yelp"></a></li>
	</ul>


	<!-- your home html -->

<?php get_footer(); ?>
