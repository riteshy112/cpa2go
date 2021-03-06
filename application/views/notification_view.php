<?php $active = 0; ?>

<?php foreach($noti_data AS $val){ ?>
<?php if($val->ticket_status == 1){ $active = 1; ?>
<div class="noti_box d-flex align-items-center flex-wrap">
	<a href="javascript:;" class="d-flex align-items-center flex-wrap noti_status" data-id=<?=$val->id?> data-status="1">
		<div class="noti_icon">
			<div class="notib_icon">
				<svg fill="#fff" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512">
					<g>
						<defs>
							<rect id="SVGID_1_" x="21.398" y="7.855" width="465.102" height="498.291"></rect>
						</defs>
						<clipPath id="SVGID_2_">
							<use xlink:href="#SVGID_1_" overflow="visible"></use>
						</clipPath>
						<path clip-path="url(#SVGID_2_)" d="M370.202,315.134c0-4.584-3.722-8.305-8.305-8.305h-49.829c-4.584,0-8.306,3.721-8.306,8.305
s3.722,8.304,8.306,8.304h49.829C366.48,323.438,370.202,319.719,370.202,315.134"></path>
						<path clip-path="url(#SVGID_2_)" d="M336.982,99.208V57.684c0-4.583-3.722-8.305-8.305-8.305c-4.584,0-8.305,3.721-8.305,8.305
v41.524c0,22.896,18.627,41.525,41.524,41.525h74.742v157.791c0,4.584,3.722,8.305,8.306,8.305s8.305-3.721,8.305-8.305V132.428
c0-4.584-3.721-8.305-8.305-8.305h-83.048C348.159,124.123,336.982,112.945,336.982,99.208"></path>
						<path clip-path="url(#SVGID_2_)" d="M361.896,207.171h-66.439c-4.584,0-8.305,3.721-8.305,8.305s3.721,8.304,8.305,8.304h66.439
c4.584,0,8.305-3.72,8.305-8.304C370.202,210.892,366.48,207.171,361.896,207.171"></path>
						<path clip-path="url(#SVGID_2_)" d="M270.543,215.476c0-4.584-3.721-8.305-8.305-8.305H212.41c-4.584,0-8.304,3.721-8.304,8.305
s3.72,8.305,8.304,8.305h49.829C266.822,223.781,270.543,220.061,270.543,215.476"></path>
						<path clip-path="url(#SVGID_2_)" d="M212.409,257c-4.584,0-8.305,3.721-8.305,8.305s3.72,8.305,8.305,8.305h16.61
c4.583,0,8.304-3.721,8.304-8.305S233.603,257,229.019,257H212.409z"></path>
						<path clip-path="url(#SVGID_2_)" d="M212.409,173.952h83.048c4.583,0,8.305-3.721,8.305-8.305c0-4.584-3.722-8.304-8.305-8.304
h-83.048c-4.584,0-8.305,3.72-8.305,8.304C204.104,170.231,207.825,173.952,212.409,173.952"></path>
						<path clip-path="url(#SVGID_2_)" d="M262.238,273.61h83.048c4.583,0,8.305-3.721,8.305-8.305s-3.722-8.305-8.305-8.305h-83.048
c-4.584,0-8.305,3.721-8.305,8.305S257.654,273.61,262.238,273.61"></path>
						<path clip-path="url(#SVGID_2_)" d="M312.067,356.658c-4.584,0-8.305,3.72-8.305,8.304s3.721,8.305,8.305,8.305h16.609
c4.583,0,8.306-3.721,8.306-8.305s-3.723-8.304-8.306-8.304H312.067z"></path>
						<path clip-path="url(#SVGID_2_)" d="M278.848,306.829h-66.438c-4.584,0-8.305,3.721-8.305,8.305s3.721,8.304,8.305,8.304h66.438
c4.584,0,8.305-3.72,8.305-8.304S283.432,306.829,278.848,306.829"></path>
						<path clip-path="url(#SVGID_2_)" d="M278.848,356.658h-66.438c-4.584,0-8.305,3.72-8.305,8.304s3.721,8.305,8.305,8.305h66.438
c4.584,0,8.305-3.721,8.305-8.305S283.432,356.658,278.848,356.658"></path>
						<path clip-path="url(#SVGID_2_)" d="M476.577,349.939l-16.608-16.61c-12.766-12.764-32.217-12.739-44.963,0L306.195,442.14
c-1.554,1.554-2.433,3.671-2.433,5.871v49.829c0,4.584,3.72,8.305,8.304,8.305h49.829c2.201,0,4.318-0.88,5.872-2.433
l108.81-108.81C489.808,381.671,489.808,363.178,476.577,349.939 M404.268,367.554l13.172,13.172l-72.153,72.152l-13.171-13.172
L404.268,367.554z M320.372,489.534v-38.085l38.087,38.085H320.372z M370.202,477.792l-13.173-13.172l72.153-72.152l13.171,13.171
L370.202,477.792z M464.834,383.159l-10.737,10.738l-38.087-38.086l10.738-10.738c6.561-6.554,14.883-6.587,21.477,0l16.609,16.609
C471.552,368.409,471.552,376.439,464.834,383.159"></path>
						<path clip-path="url(#SVGID_2_)" d="M278.848,489.534H62.922c-13.736,0-24.915-11.178-24.915-24.914V49.379
c0-13.735,11.178-24.915,24.915-24.915h262.316l80.615,80.615c3.247,3.248,8.496,3.248,11.742,0c3.248-3.247,3.248-8.497,0-11.743
l-83.048-83.049c-1.553-1.561-3.67-2.433-5.87-2.433H62.922c-22.896,0-41.523,18.628-41.523,41.524v415.242
c0,22.896,18.627,41.524,41.524,41.524h215.926c4.584,0,8.305-3.721,8.305-8.305C287.153,493.258,283.432,489.534,278.848,489.534"></path>
						<path clip-path="url(#SVGID_2_)" d="M278.848,406.486h-66.438c-4.584,0-8.305,3.721-8.305,8.305s3.721,8.305,8.305,8.305h66.438
c4.584,0,8.305-3.721,8.305-8.305S283.432,406.486,278.848,406.486"></path>
						<path clip-path="url(#SVGID_2_)" d="M170.886,165.646c0-4.584-3.721-8.304-8.305-8.304h-49.829c-4.583,0-8.305,3.72-8.305,8.304
v49.829c0,4.584,3.721,8.305,8.305,8.305h49.829c4.583,0,8.305-3.721,8.305-8.305V165.646z M154.275,207.171h-33.219v-33.219
h33.219V207.171z"></path>
						<path clip-path="url(#SVGID_2_)" d="M112.751,423.097h49.829c4.583,0,8.305-3.721,8.305-8.305v-49.829
c0-4.584-3.721-8.304-8.305-8.304h-49.829c-4.584,0-8.305,3.72-8.305,8.304v49.829
C104.446,419.376,108.167,423.097,112.751,423.097 M121.056,373.268h33.219v33.219h-33.219V373.268z"></path>
						<path clip-path="url(#SVGID_2_)" d="M123.49,321.005c1.561,1.561,3.679,2.433,5.871,2.433c0.275,0,0.541-0.008,0.823-0.042
c2.475-0.24,4.708-1.586,6.087-3.654l33.219-49.829c2.542-3.819,1.512-8.978-2.3-11.519c-3.829-2.55-8.969-1.512-11.519,2.301
l-27.597,41.399l-9.451-9.441c-3.248-3.248-8.497-3.248-11.744,0c-3.247,3.247-3.248,8.496,0,11.743L123.49,321.005z"></path>
					</g>
				</svg>
			</div>
		</div>
		<div class="noti_details">
			<div class="notid_title">
				<p><?= 'Open Question Number : #'.$val->ticket_number.' by '.$val->first_name.' '.$val->last_name ?></p>
			</div>
			<div class="notid_time">
				<!-- <p>2 hrs ago</p> -->
			</div>
		</div>
	</a>
</div>

<!-- end forloop here -->
<?php } 

if($val->ticket_status == 3){ $active = 1; ?>
<!-- forloop here -->
<div class="noti_box d-flex align-items-center flex-wrap">
	<a href="javascript:;" class="d-flex align-items-center flex-wrap noti_status" data-id=<?=$val->id?> data-status="3">
		<div class="noti_icon">
			<div class="notib_icon purple">
				<svg fill="#fff" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512">
					<g>
						<defs>
							<rect id="SVGID_1_" x="18.499" y="16.421" width="475.001" height="475"></rect>
						</defs>
						<clipPath id="SVGID_2_">
							<use xlink:href="#SVGID_1_" overflow="visible"></use>
						</clipPath>
						<path clip-path="url(#SVGID_2_)" d="M255.999,16.421c-130.958,0-237.5,106.542-237.5,237.5c0,130.958,106.542,237.5,237.5,237.5
c61.682,0,120.13-23.536,164.582-66.271c3.849-3.698,3.97-9.82,0.27-13.667c-3.697-3.847-9.815-3.969-13.667-0.269
C366.352,450.47,312.66,472.088,256,472.088C135.702,472.09,37.832,374.22,37.832,253.921s97.87-218.167,218.167-218.167
c120.297,0,218.167,97.87,218.167,218.167c0,27.133-4.916,53.603-14.612,78.675c-1.926,4.979,0.549,10.575,5.528,12.503
c4.98,1.922,10.575-0.55,12.503-5.528c10.56-27.307,15.915-56.122,15.915-85.651C493.5,122.963,386.958,16.421,255.999,16.421"></path>
						<path clip-path="url(#SVGID_2_)" d="M288.539,274.401c-3.818-3.734-9.938-3.667-13.671,0.146c-3.733,3.814-3.667,9.935,0.144,13.67
l76.101,74.488c1.882,1.841,4.322,2.756,6.762,2.756c2.508,0,5.015-0.971,6.908-2.902c3.733-3.815,3.668-9.936-0.145-13.672
L288.539,274.401z"></path>
						<path clip-path="url(#SVGID_2_)" d="M220.165,231.757c1.886,1.886,4.361,2.83,6.836,2.83c2.474,0,4.947-0.944,6.835-2.83
c3.775-3.774,3.775-9.895,0-13.67l-72.876-72.876c-3.775-3.774-9.896-3.774-13.669,0c-3.775,3.775-3.775,9.895,0,13.669
L220.165,231.757z"></path>
						<path clip-path="url(#SVGID_2_)" d="M364.71,145.21c-3.775-3.775-9.897-3.775-13.67,0L147.289,348.962
c-3.774,3.774-3.774,9.895,0,13.669c1.885,1.887,4.361,2.83,6.836,2.83c2.474,0,4.946-0.943,6.835-2.83l203.75-203.75
C368.484,155.104,368.484,148.986,364.71,145.21"></path>
					</g>
				</svg>
			</div>
		</div>
		<div class="noti_details">
			<div class="notid_title">
				<p><?= 'Closed Question Number : #'.$val->ticket_number.' by '.$val->first_name.' '.$val->last_name ?></p>
			</div>
			<div class="notid_time">
				<p>2 hrs ago</p>
			</div>
		</div>
	</a>
</div>

<?php } } ?>
<!-- end forloop here -->

<!-- forloop here -->
<?php foreach($rate_noti_data AS $rate_val) {  $active = 1; ?>
<div class="noti_box d-flex align-items-center flex-wrap">
	<a href="javascript:;" class="d-flex align-items-center flex-wrap noti_status" data-id=<?=$rate_val->id?> data-status="0">
		<div class="noti_icon">
			<div class="notib_icon red">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512">
					<path fill="none" stroke="#fff" stroke-width="20" stroke-miterlimit="10" d="M380.393,483.458c-7.05,0-13.838-1.647-20.162-4.909
l-102.344-52.628c-1.506-0.757-3.625-0.757-5.129,0.013l-102.333,52.615c-17.901,9.183-40.371,4.887-53.429-10.301
c-8.325-9.643-11.685-21.866-9.478-34.408l19.527-111.426c0.308-1.747-0.296-3.525-1.604-4.777l-82.785-78.919
c-11.894-11.344-16.1-27.993-10.971-43.456c5.15-15.474,18.56-26.533,35.011-28.861l114.424-16.254
c1.79-0.252,3.338-1.362,4.14-2.943l51.167-101.41c7.358-14.574,22.25-23.634,38.877-23.634c16.637,0,31.54,9.061,38.887,23.634
l51.155,101.388c0.803,1.582,2.339,2.68,4.142,2.933l114.435,16.265c16.452,2.339,29.861,13.398,35.012,28.861
c5.13,15.475,0.923,32.124-10.96,43.469l-82.796,78.929c-1.307,1.241-1.911,3.021-1.604,4.777l19.537,111.438
c2.229,12.53-1.143,24.755-9.488,34.419C405.313,477.923,393.209,483.458,380.393,483.458z"></path>
				</svg>
			</div>
		</div>
		<div class="noti_details">
			<div class="notid_title">
				<p><?=$rate_val->ratting_no .' Star Rating by '.$rate_val->first_name.' '.$rate_val->last_name?></p>
			</div>
			<div class="notid_time">
				<p>2 hrs ago</p>
			</div>
		</div>
	</a>
</div>
<?php } ?>

<?php if($active == 0){ ?>
<div class="noti_box d-flex align-items-center flex-wrap">
	<div>No new notifications</div>		
</div>
<?php } ?>

<!-- end forloop here -->