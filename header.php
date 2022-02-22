<!DOCTYPE HTML>
<html <?php language_attributes(); ?> >
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">

<?php

$nav_color='';

if (is_front_page()) {
	$nav_color='navbar-dark';
} else {
	$nav_color='navbar-light';
}

?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>  >
<div class="page">

	<header class="header">
		<div class="overlay"></div>	

		<nav class="navbar navbar-expand-lg <?php echo $nav_color; ?>" role="navigation">		
		  <div class="container">

			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="col col-xl-3 navbar-brand-col">
				<a class="navbar-brand" href="/">
					<svg width="86" height="53" viewBox="0 0 86 53" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M30.5492 36.0636C30.5039 36.1089 30.4586 36.1541 30.3681 36.1541V37.3765C30.3681 37.965 30.8662 38.463 31.4549 38.463H37.3418C37.3871 38.463 37.4324 38.463 37.4776 38.463C37.5229 38.463 37.5682 38.463 37.6135 38.4177C37.6588 38.4177 37.7041 38.4177 37.7493 38.3724C37.7946 38.3724 37.7946 38.3724 37.8399 38.3272C38.2475 38.1461 38.5192 37.7839 38.5192 37.3312V24.5195C37.5229 29.3635 34.6248 33.5284 30.5492 36.0636ZM3.10717 20.9883C3.10717 14.1977 6.91102 8.26719 12.4809 5.23403L11.4394 3.559C11.2583 3.2421 10.896 3.01575 10.4884 3.01575H4.10341C3.46944 3.01575 3.0166 3.51373 3.0166 4.10225V37.3765C3.0166 37.965 3.51472 38.463 4.10341 38.463H9.99032C10.6243 38.463 11.0771 37.965 11.0771 37.3765V35.8372C6.27704 32.7135 3.10717 27.1905 3.10717 20.9883Z" fill="url(#paint0_linear_303_2211)"/>
						<path d="M56.1337 10.6666C54.6394 7.40704 51.3336 5.14349 47.4845 5.14349C43.3637 5.14349 39.8315 7.76921 38.5183 11.4362V17.4119C38.3824 16.7329 38.2013 16.0991 38.0202 15.4653C38.0202 15.42 38.0202 15.42 37.9749 15.3747C36.6617 11.3909 34.0352 8.0861 30.5483 5.86782C30.0955 5.5962 29.6427 5.32457 29.1445 5.05294L30.0502 3.559C30.2313 3.2421 30.5936 3.01575 31.0012 3.01575H44.7675C48.1638 3.01575 51.0167 4.19279 53.3714 6.54689C54.5941 7.76921 55.545 9.17261 56.1337 10.6666Z" fill="#C4C4C4"/>
						<path d="M56.1337 10.6666C54.6394 7.40704 51.3336 5.14349 47.4845 5.14349C43.3637 5.14349 39.8315 7.76921 38.5183 11.4362V17.4119C38.3824 16.7329 38.2013 16.0991 38.0202 15.4653C38.0202 15.42 38.0202 15.42 37.9749 15.3747C36.6617 11.3909 34.0352 8.0861 30.5483 5.86782C30.0955 5.5962 29.6427 5.32457 29.1445 5.05294L30.0502 3.559C30.2313 3.2421 30.5936 3.01575 31.0012 3.01575H44.7675C48.1638 3.01575 51.0167 4.19279 53.3714 6.54689C54.5941 7.76921 55.545 9.17261 56.1337 10.6666Z" fill="url(#paint1_linear_303_2211)"/>
						<path d="M55.6844 38.5239H49.9866C49.5344 38.5239 49.0822 38.2507 48.8561 37.8865L42.9322 27.4603C42.7061 27.0505 42.2539 26.8229 41.8017 26.8229H39.9929C39.2693 26.8229 38.6815 27.4148 38.6815 28.1432V37.2491C38.6815 37.7954 38.3197 38.2963 37.8223 38.4784C38.2293 38.2963 38.5006 37.932 38.5006 37.4767V24.4553C38.7267 23.3171 38.8623 22.0878 38.8623 20.8585C38.8623 20.6309 38.8623 20.4032 38.8623 20.1301C41.0329 26.5497 46.9116 31.1937 53.9208 31.5124L56.8149 36.5206C57.3124 37.4312 56.6793 38.5239 55.6844 38.5239Z" fill="#C4C4C4"/>
						<path d="M55.6844 38.5239H49.9866C49.5344 38.5239 49.0822 38.2507 48.8561 37.8865L42.9322 27.4603C42.7061 27.0505 42.2539 26.8229 41.8017 26.8229H39.9929C39.2693 26.8229 38.6815 27.4148 38.6815 28.1432V37.2491C38.6815 37.7954 38.3197 38.2963 37.8223 38.4784C38.2293 38.2963 38.5006 37.932 38.5006 37.4767V24.4553C38.7267 23.3171 38.8623 22.0878 38.8623 20.8585C38.8623 20.6309 38.8623 20.4032 38.8623 20.1301C41.0329 26.5497 46.9116 31.1937 53.9208 31.5124L56.8149 36.5206C57.3124 37.4312 56.6793 38.5239 55.6844 38.5239Z" fill="url(#paint2_linear_303_2211)"/>
						<path d="M83.5297 3.01575H59.7103C58.9858 3.01575 58.4424 3.60427 58.4424 4.28334V9.53478C58.4424 10.2591 59.0311 10.8024 59.7103 10.8024H66.2765C67.001 10.8024 67.5444 11.3909 67.5444 12.07V37.1954C67.5444 37.9197 68.1331 38.463 68.8124 38.463H74.3823C75.1069 38.463 75.6503 37.8744 75.6503 37.1954V12.1152C75.6503 11.3909 76.239 10.8476 76.9182 10.8476H83.4844C84.2089 10.8476 84.7523 10.2591 84.7523 9.58005V4.28334C84.8429 3.60427 84.2542 3.01575 83.5297 3.01575Z" fill="url(#paint3_linear_303_2211)"/>
						<path d="M38.8807 20.9883C38.8807 22.2106 38.7449 23.3877 38.5184 24.5647C37.5222 29.4087 34.624 33.5284 30.5485 36.1088C30.5032 36.1541 30.4579 36.1994 30.3673 36.1994V21.8032C30.3673 20.6714 28.9183 20.264 28.3296 21.2147L21.4464 32.5324C21.3106 32.7588 21.0389 32.9399 20.7672 32.9399C20.4955 32.9399 20.2238 32.8041 20.0879 32.5324L13.2048 21.2147C12.6161 20.264 11.167 20.6714 11.167 21.8032V35.8825C6.27632 32.7135 3.10645 27.1905 3.10645 20.9883C3.10645 14.1977 6.91029 8.26716 12.4802 5.234L19.8162 17.2308C20.269 17.9552 21.2653 17.9552 21.7181 17.2308L29.1447 5.05292C29.6428 5.32454 30.0956 5.5509 30.5485 5.8678C33.9901 8.04081 36.6618 11.3909 37.975 15.3747C37.975 15.42 37.975 15.42 38.0203 15.4653C38.2467 16.0991 38.3826 16.7328 38.5184 17.4119C38.5184 17.4119 38.5388 18.7499 38.6294 19.1121C38.7199 19.4743 38.7449 19.9018 38.8807 20.264C38.8807 20.4903 38.8807 20.7167 38.8807 20.9883Z" fill="url(#paint4_linear_303_2211)"/>
						<path d="M56.9485 15.1937C56.9485 15.3747 56.9485 15.5106 56.9485 15.6916C56.4504 20.4451 52.4201 24.1573 47.4841 24.1573C44.0426 24.1573 41.0538 22.3465 39.3783 19.585C39.5595 19.6755 39.7859 19.766 40.0123 19.766H44.8124C45.9445 19.766 46.8955 19.3133 47.6653 18.4532C48.4804 17.593 48.8427 16.5065 48.8427 15.1937C48.8427 13.9261 48.4351 12.8396 47.6653 11.9341C46.8502 11.074 45.8992 10.6213 44.8124 10.6213H39.967C39.2425 10.6213 38.6538 11.2098 38.6538 11.9341V18.2721C38.6538 18.2268 38.6538 18.2268 38.6085 18.2268C38.5632 17.9552 38.5179 17.7288 38.4727 17.4572V11.4362C39.8312 7.76921 43.3633 5.14349 47.4841 5.14349C51.3333 5.14349 54.5937 7.40705 56.1334 10.6666C56.6768 12.0247 56.9485 13.5639 56.9485 15.1937Z" fill="url(#paint5_linear_303_2211)"/>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M44.7668 10.6213C45.8536 10.6213 46.8045 11.074 47.6196 11.9341C48.3895 12.8396 48.797 13.9261 48.797 15.1937C48.8423 13.9261 48.4347 12.8396 47.6196 11.9341C46.8498 11.074 45.8989 10.6213 44.7668 10.6213ZM38.6534 18.1815C38.6308 18.0457 38.6081 17.9212 38.5855 17.7967C38.5629 17.6722 38.5402 17.5477 38.5176 17.4119V17.8194C38.5402 17.8873 38.5629 17.9439 38.5855 18.0005C38.6081 18.057 38.6308 18.1136 38.6534 18.1815ZM66.5936 3.01575C69.6276 6.04891 71.4842 10.2591 71.4842 14.8768C71.4842 18.9512 70.0352 22.6634 67.5898 25.5607V12.07C67.5898 11.3909 67.0464 10.8024 66.3219 10.8024H59.7557C59.0765 10.8024 58.4878 10.2591 58.4878 9.53478V4.28334C58.4878 3.60427 59.0312 3.01575 59.7557 3.01575H66.5936ZM56.9481 15.6916V15.1937C56.9481 13.5639 56.6764 12.0247 56.133 10.6666C56.6764 11.8889 56.9934 13.247 56.9934 14.6504C56.9934 15.0126 56.9934 15.3295 56.9481 15.6916Z" fill="url(#paint6_linear_303_2211)"/>
						<path d="M51.0617 26.602L53.9599 31.5818C46.9409 31.2649 41.054 26.602 38.8804 20.264C38.7445 19.9018 38.7298 19.5397 38.5939 19.1322C38.4581 18.7248 38.5181 17.8194 38.5181 17.8194C38.5634 17.9552 38.6087 18.0457 38.654 18.1815C38.654 18.1815 38.654 18.1815 38.8396 18.6908C39.0208 19.1435 38.9541 18.9504 39.2258 19.3578C40.9013 22.0741 44.0427 24.112 47.4843 24.112C52.375 24.112 56.4052 20.3998 56.9486 15.6464C56.8581 17.593 56.2694 19.4039 55.1373 21.1242C54.1863 22.6181 52.9637 23.8404 51.5146 24.7911C50.8806 25.2438 50.6995 26.0134 51.0617 26.602Z" fill="url(#paint7_linear_303_2211)"/>
						<path d="M20.762 3C22.8253 3 24.1031 5.24708 23.0482 7.0203C22.0169 8.7537 19.5071 8.7537 18.4758 7.0203C17.4209 5.24708 18.6987 3 20.762 3Z" fill="#C4C4C4"/>
						<path d="M20.762 3C22.8253 3 24.1031 5.24708 23.0482 7.0203C22.0169 8.7537 19.5071 8.7537 18.4758 7.0203C17.4209 5.24708 18.6987 3 20.762 3Z" fill="url(#paint8_linear_303_2211)"/>
						<path class="txt" d="M7.25305 45.0531H8.36527V50.5653H7.29221V46.9902L5.74921 49.5495H5.62389L4.08089 46.9981V50.5653H3V45.0531H4.11222L5.68655 47.6596L7.25305 45.0531Z" fill="white"/>
						<path class="txt"  d="M12.3162 47.0926V46.628H13.3266V50.5653H12.3162V50.1007C12.0134 50.4839 11.5878 50.6755 11.0395 50.6755C10.5173 50.6755 10.0683 50.476 9.69232 50.0771C9.32159 49.6728 9.13622 49.1794 9.13622 48.5967C9.13622 48.0192 9.32159 47.5283 9.69232 47.1241C10.0683 46.7199 10.5173 46.5178 11.0395 46.5178C11.5878 46.5178 12.0134 46.7094 12.3162 47.0926ZM10.4521 49.3999C10.6557 49.6046 10.9142 49.707 11.2275 49.707C11.5408 49.707 11.7993 49.6046 12.0029 49.3999C12.2118 49.1899 12.3162 48.9221 12.3162 48.5967C12.3162 48.2712 12.2118 48.0061 12.0029 47.8013C11.7993 47.5913 11.5408 47.4863 11.2275 47.4863C10.9142 47.4863 10.6557 47.5913 10.4521 47.8013C10.2484 48.0061 10.1466 48.2712 10.1466 48.5967C10.1466 48.9221 10.2484 49.1899 10.4521 49.3999Z" fill="white"/>
						<path class="txt"  d="M15.2532 46.628V47.3052C15.342 47.0585 15.4934 46.8721 15.7075 46.7461C15.9216 46.6149 16.167 46.5493 16.4438 46.5493V47.6832C16.1357 47.6412 15.8589 47.7042 15.6135 47.8722C15.3733 48.0349 15.2532 48.3053 15.2532 48.6833V50.5653H14.2428V46.628H15.2532Z" fill="white"/>
						<path class="txt"  d="M19.0241 48.573L20.6455 50.5653H19.4706L18.0451 48.7778V50.5653H17.0347V45.0531H18.0451V48.3604L19.3923 46.628H20.5985L19.0241 48.573Z" fill="white"/>
						<path class="txt"  d="M24.6734 49.014H21.7205C21.8511 49.5075 22.2192 49.7542 22.8249 49.7542C23.2113 49.7542 23.5037 49.623 23.7022 49.3605L24.5167 49.833C24.1303 50.3947 23.5612 50.6755 22.8093 50.6755C22.1618 50.6755 21.6422 50.4787 21.2506 50.0849C20.859 49.6912 20.6632 49.1951 20.6632 48.5967C20.6632 48.0087 20.8564 47.5152 21.2428 47.1162C21.6239 46.7173 22.12 46.5178 22.7309 46.5178C23.3105 46.5178 23.7831 46.7173 24.1486 47.1162C24.5246 47.5152 24.7126 48.0087 24.7126 48.5967C24.7126 48.7069 24.6995 48.846 24.6734 49.014ZM21.7049 48.2266H23.7022C23.6447 47.9693 23.5272 47.7724 23.3497 47.636C23.1774 47.4995 22.9711 47.4312 22.7309 47.4312C22.4594 47.4312 22.2349 47.5021 22.0573 47.6438C21.8798 47.7803 21.7623 47.9746 21.7049 48.2266Z" fill="white"/>
						<path class="txt"  d="M27.5433 46.628V47.6045H26.6582V49.2424C26.6582 49.3789 26.6921 49.4786 26.76 49.5416C26.8279 49.6046 26.9271 49.6413 27.0577 49.6518C27.1882 49.6571 27.3501 49.6545 27.5433 49.644V50.5653C26.8592 50.644 26.371 50.581 26.0786 50.3763C25.7914 50.1663 25.6478 49.7883 25.6478 49.2424V47.6045H24.9664V46.628H25.6478V45.8327L26.6582 45.5256V46.628H27.5433Z" fill="white"/>
						<path class="txt"  d="M33.5917 50.5653H32.4246L31.3202 48.6518H30.4978V50.5653H29.4169V45.0531H31.61C32.1165 45.0531 32.5473 45.2316 32.9024 45.5886C33.2575 45.9456 33.435 46.376 33.435 46.88C33.435 47.2212 33.3384 47.5388 33.1452 47.8328C32.952 48.1216 32.6961 48.3394 32.3776 48.4864L33.5917 50.5653ZM31.61 46.0689H30.4978V47.699H31.61C31.8137 47.699 31.9886 47.6202 32.1348 47.4627C32.281 47.3 32.3541 47.1057 32.3541 46.88C32.3541 46.6543 32.281 46.4626 32.1348 46.3052C31.9886 46.1477 31.8137 46.0689 31.61 46.0689Z" fill="white"/>
						<path class="txt"  d="M37.7888 49.014H34.836C34.9665 49.5075 35.3347 49.7542 35.9404 49.7542C36.3268 49.7542 36.6192 49.623 36.8176 49.3605L37.6322 49.833C37.2458 50.3947 36.6766 50.6755 35.9247 50.6755C35.2772 50.6755 34.7577 50.4787 34.366 50.0849C33.9744 49.6912 33.7786 49.1951 33.7786 48.5967C33.7786 48.0087 33.9718 47.5152 34.3582 47.1162C34.7394 46.7173 35.2354 46.5178 35.8464 46.5178C36.426 46.5178 36.8985 46.7173 37.2641 47.1162C37.64 47.5152 37.828 48.0087 37.828 48.5967C37.828 48.7069 37.815 48.846 37.7888 49.014ZM34.8203 48.2266H36.8176C36.7602 47.9693 36.6427 47.7724 36.4652 47.636C36.2928 47.4995 36.0866 47.4312 35.8464 47.4312C35.5749 47.4312 35.3503 47.5021 35.1728 47.6438C34.9952 47.7803 34.8778 47.9746 34.8203 48.2266Z" fill="white"/>
						<path class="txt"  d="M39.3124 47.7462C39.3124 47.9142 39.55 48.0586 40.0252 48.1793C40.1923 48.2161 40.3437 48.2607 40.4795 48.3132C40.6153 48.3604 40.751 48.4313 40.8868 48.5258C41.0278 48.615 41.1374 48.7358 41.2157 48.888C41.2941 49.0403 41.3332 49.2161 41.3332 49.4156C41.3332 49.8198 41.1818 50.1322 40.8789 50.3527C40.5761 50.5679 40.2027 50.6755 39.7589 50.6755C38.9548 50.6755 38.4065 50.3632 38.1141 49.7385L38.9913 49.2424C39.1114 49.5836 39.3673 49.7542 39.7589 49.7542C40.1192 49.7542 40.2993 49.6413 40.2993 49.4156C40.2993 49.2476 40.0618 49.1033 39.5866 48.9825C39.4091 48.9353 39.2576 48.888 39.1323 48.8408C39.007 48.7935 38.8712 48.7253 38.725 48.636C38.5788 48.5415 38.4665 48.4234 38.3882 48.2817C38.3151 48.1347 38.2786 47.9641 38.2786 47.7698C38.2786 47.3813 38.4195 47.0769 38.7015 46.8564C38.9887 46.6306 39.3438 46.5178 39.7667 46.5178C40.0853 46.5178 40.3751 46.5913 40.6361 46.7383C40.8972 46.88 41.1035 47.0847 41.2549 47.3525L40.3933 47.8249C40.268 47.5572 40.0591 47.4233 39.7667 47.4233C39.6362 47.4233 39.5265 47.4548 39.4378 47.5178C39.3542 47.5756 39.3124 47.6517 39.3124 47.7462Z" fill="white"/>
						<path class="txt"  d="M45.7361 49.014H42.7832C42.9138 49.5075 43.2819 49.7542 43.8876 49.7542C44.274 49.7542 44.5664 49.623 44.7648 49.3605L45.5794 49.833C45.193 50.3947 44.6239 50.6755 43.8719 50.6755C43.2245 50.6755 42.7049 50.4787 42.3133 50.0849C41.9217 49.6912 41.7258 49.1951 41.7258 48.5967C41.7258 48.0087 41.919 47.5152 42.3054 47.1162C42.6866 46.7173 43.1827 46.5178 43.7936 46.5178C44.3732 46.5178 44.8458 46.7173 45.2113 47.1162C45.5873 47.5152 45.7752 48.0087 45.7752 48.5967C45.7752 48.7069 45.7622 48.846 45.7361 49.014ZM42.7676 48.2266H44.7648C44.7074 47.9693 44.5899 47.7724 44.4124 47.636C44.2401 47.4995 44.0338 47.4312 43.7936 47.4312C43.5221 47.4312 43.2976 47.5021 43.12 47.6438C42.9425 47.7803 42.825 47.9746 42.7676 48.2266Z" fill="white"/>
						<path class="txt"  d="M49.4264 47.0926V46.628H50.4367V50.5653H49.4264V50.1007C49.1235 50.4839 48.6979 50.6755 48.1497 50.6755C47.6275 50.6755 47.1784 50.476 46.8025 50.0771C46.4317 49.6728 46.2464 49.1794 46.2464 48.5967C46.2464 48.0192 46.4317 47.5283 46.8025 47.1241C47.1784 46.7199 47.6275 46.5178 48.1497 46.5178C48.6979 46.5178 49.1235 46.7094 49.4264 47.0926ZM47.5622 49.3999C47.7659 49.6046 48.0243 49.707 48.3376 49.707C48.6509 49.707 48.9094 49.6046 49.1131 49.3999C49.3219 49.1899 49.4264 48.9221 49.4264 48.5967C49.4264 48.2712 49.3219 48.0061 49.1131 47.8013C48.9094 47.5913 48.6509 47.4863 48.3376 47.4863C48.0243 47.4863 47.7659 47.5913 47.5622 47.8013C47.3586 48.0061 47.2567 48.2712 47.2567 48.5967C47.2567 48.9221 47.3586 49.1899 47.5622 49.3999Z" fill="white"/>
						<path class="txt"  d="M52.3634 46.628V47.3052C52.4521 47.0585 52.6036 46.8721 52.8176 46.7461C53.0317 46.6149 53.2771 46.5493 53.5539 46.5493V47.6832C53.2458 47.6412 52.9691 47.7042 52.7237 47.8722C52.4835 48.0349 52.3634 48.3053 52.3634 48.6833V50.5653H51.353V46.628H52.3634Z" fill="white"/>
						<path class="txt"  d="M55.8636 50.6755C55.2736 50.6755 54.7801 50.476 54.3833 50.0771C53.9917 49.6781 53.7959 49.1846 53.7959 48.5967C53.7959 48.0087 53.9917 47.5152 54.3833 47.1162C54.7801 46.7173 55.2736 46.5178 55.8636 46.5178C56.2448 46.5178 56.592 46.6096 56.9053 46.7934C57.2186 46.9771 57.4562 47.2239 57.6181 47.5336L56.7487 48.0454C56.6704 47.8827 56.5503 47.7541 56.3884 47.6596C56.2318 47.5651 56.0542 47.5178 55.8558 47.5178C55.5529 47.5178 55.3023 47.6202 55.1039 47.8249C54.9055 48.0244 54.8062 48.2817 54.8062 48.5967C54.8062 48.9011 54.9055 49.1584 55.1039 49.3684C55.3023 49.5679 55.5529 49.6676 55.8558 49.6676C56.0594 49.6676 56.2396 49.623 56.3962 49.5337C56.5581 49.4392 56.6782 49.3106 56.7565 49.1479L57.6338 49.6518C57.4615 49.9668 57.216 50.2162 56.8975 50.3999C56.5842 50.5837 56.2396 50.6755 55.8636 50.6755Z" fill="white"/>
						<path class="txt"  d="M60.3456 46.5178C60.779 46.5178 61.1315 46.6621 61.403 46.9509C61.685 47.2449 61.8259 47.6438 61.8259 48.1478V50.5653H60.8155V48.2738C60.8155 48.0166 60.7451 47.8171 60.6041 47.6753C60.4683 47.5336 60.2803 47.4627 60.0401 47.4627C59.7738 47.4627 59.5623 47.5467 59.4057 47.7147C59.2543 47.8774 59.1786 48.1189 59.1786 48.4392V50.5653H58.1682V45.0531H59.1786V47.069C59.4187 46.7015 59.8078 46.5178 60.3456 46.5178Z" fill="white"/>
						<path class="txt"  d="M63.0304 45.0531H67.0642V46.0925H65.5838V50.5653H64.503V46.0925H63.0304V45.0531Z" fill="white"/>
						<path class="txt"  d="M70.2459 50.0771C69.849 50.476 69.3582 50.6755 68.7734 50.6755C68.1886 50.6755 67.6977 50.476 67.3009 50.0771C66.904 49.6781 66.7056 49.1846 66.7056 48.5967C66.7056 48.0139 66.904 47.5231 67.3009 47.1241C67.7029 46.7199 68.1938 46.5178 68.7734 46.5178C69.353 46.5178 69.8438 46.7199 70.2459 47.1241C70.648 47.5283 70.849 48.0192 70.849 48.5967C70.849 49.1794 70.648 49.6728 70.2459 50.0771ZM68.0136 49.3762C68.2173 49.581 68.4705 49.6833 68.7734 49.6833C69.0762 49.6833 69.3295 49.581 69.5331 49.3762C69.7368 49.1715 69.8386 48.9116 69.8386 48.5967C69.8386 48.2817 69.7368 48.0218 69.5331 47.8171C69.3295 47.6123 69.0762 47.51 68.7734 47.51C68.4705 47.51 68.2173 47.6123 68.0136 47.8171C67.8152 48.0271 67.716 48.2869 67.716 48.5967C67.716 48.9064 67.8152 49.1662 68.0136 49.3762Z" fill="white"/>
						<path class="txt"  d="M74.5283 47.0926V45.0531H75.5387V50.5653H74.5283V50.1007C74.2307 50.4839 73.8077 50.6755 73.2594 50.6755C72.7321 50.6755 72.2804 50.476 71.9044 50.0771C71.5337 49.6728 71.3483 49.1794 71.3483 48.5967C71.3483 48.0192 71.5337 47.5283 71.9044 47.1241C72.2804 46.7199 72.7321 46.5178 73.2594 46.5178C73.8077 46.5178 74.2307 46.7094 74.5283 47.0926ZM72.6642 49.3999C72.8783 49.6046 73.1393 49.707 73.4474 49.707C73.7607 49.707 74.0192 49.6046 74.2228 49.3999C74.4265 49.1899 74.5283 48.9221 74.5283 48.5967C74.5283 48.2712 74.4265 48.0061 74.2228 47.8013C74.0192 47.5913 73.7607 47.4863 73.4474 47.4863C73.1341 47.4863 72.873 47.5913 72.6642 47.8013C72.4605 48.0061 72.3587 48.2712 72.3587 48.5967C72.3587 48.9221 72.4605 49.1899 72.6642 49.3999Z" fill="white"/>
						<path class="txt"  d="M79.4391 47.0926V46.628H80.4495V50.5653H79.4391V50.1007C79.1363 50.4839 78.7107 50.6755 78.1624 50.6755C77.6402 50.6755 77.1912 50.476 76.8152 50.0771C76.4445 49.6728 76.2591 49.1794 76.2591 48.5967C76.2591 48.0192 76.4445 47.5283 76.8152 47.1241C77.1912 46.7199 77.6402 46.5178 78.1624 46.5178C78.7107 46.5178 79.1363 46.7094 79.4391 47.0926ZM77.575 49.3999C77.7786 49.6046 78.0371 49.707 78.3504 49.707C78.6637 49.707 78.9222 49.6046 79.1258 49.3999C79.3347 49.1899 79.4391 48.9221 79.4391 48.5967C79.4391 48.2712 79.3347 48.0061 79.1258 47.8013C78.9222 47.5913 78.6637 47.4863 78.3504 47.4863C78.0371 47.4863 77.7786 47.5913 77.575 47.8013C77.3713 48.0061 77.2695 48.2712 77.2695 48.5967C77.2695 48.9221 77.3713 49.1899 77.575 49.3999Z" fill="white"/>
						<path class="txt"  d="M83.0497 49.2739L83.9191 46.628H85L83.5745 50.5653C83.3708 51.1323 83.0993 51.5417 82.7599 51.7937C82.4257 52.051 82.008 52.1665 81.5067 52.1402V51.1953C81.773 51.2005 81.9871 51.1428 82.149 51.022C82.3108 50.9013 82.4388 50.707 82.5328 50.4393L80.9271 46.628H82.0315L83.0497 49.2739Z" fill="white"/>
						<defs>
						<linearGradient id="paint0_linear_303_2211" x1="1.94772" y1="38.4537" x2="32.677" y2="-2.25657" gradientUnits="userSpaceOnUse">
						<stop stop-color="#2FA0DF"/>
						<stop offset="1" stop-color="#35EBE0"/>
						</linearGradient>
						<linearGradient id="paint1_linear_303_2211" x1="29.1163" y1="10.2167" x2="56.7036" y2="10.2167" gradientUnits="userSpaceOnUse">
						<stop stop-color="#2FA0DF"/>
						<stop offset="1" stop-color="#35EBE0"/>
						</linearGradient>
						<linearGradient id="paint2_linear_303_2211" x1="40.4199" y1="23.8468" x2="58.8715" y2="42.2684" gradientUnits="userSpaceOnUse">
						<stop stop-color="#2FA0DF"/>
						<stop offset="1" stop-color="#35EBE0"/>
						</linearGradient>
						<linearGradient id="paint3_linear_303_2211" x1="62.1121" y1="11.4246" x2="86.0171" y2="33.9957" gradientUnits="userSpaceOnUse">
						<stop stop-color="#38E0C2"/>
						<stop offset="1" stop-color="#2FA0DF"/>
						</linearGradient>
						<linearGradient id="paint4_linear_303_2211" x1="8.09452" y1="12.4416" x2="27.7092" y2="41.091" gradientUnits="userSpaceOnUse">
						<stop stop-color="#38E0C2"/>
						<stop offset="1" stop-color="#2FA0DF"/>
						</linearGradient>
						<linearGradient id="paint5_linear_303_2211" x1="38.4533" y1="14.6541" x2="57.3386" y2="14.6541" gradientUnits="userSpaceOnUse">
						<stop stop-color="#2FA0DF"/>
						<stop offset="1" stop-color="#35EBE0"/>
						</linearGradient>
						<linearGradient id="paint6_linear_303_2211" x1="38.4831" y1="14.2927" x2="72.1804" y2="14.2927" gradientUnits="userSpaceOnUse">
						<stop stop-color="#2FA0DF"/>
						<stop offset="1" stop-color="#35EBE0"/>
						</linearGradient>
						<linearGradient id="paint7_linear_303_2211" x1="41.016" y1="18.8664" x2="56.9175" y2="36.4879" gradientUnits="userSpaceOnUse">
						<stop stop-color="#2FA0DF"/>
						<stop offset="1" stop-color="#35EBE0"/>
						</linearGradient>
						<linearGradient id="paint8_linear_303_2211" x1="17.3885" y1="4.86529" x2="22.2748" y2="12.2588" gradientUnits="userSpaceOnUse">
						<stop stop-color="#38E0C2"/>
						<stop offset="1" stop-color="#2FA0DF"/>
						</linearGradient>
						</defs>
						</svg>

				</a>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-main-navbar-collapse-1" aria-controls="bs-main-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'decentralized' ); ?>">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="row navbar-row">
				
				<div class="col navbar-nav-col">
					<?php
					wp_nav_menu( array(
						'theme_location'    => 'menu-main',
						'depth'             => 1,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => 'bs-main-navbar-collapse-1',
						'menu_class'        => 'nav navbar-nav',
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker(),
					) );
					?>
				</div>
				
			</div>

		  </div>
		</nav>

		<?php 
		if (is_front_page()) {			
			get_template_part( 'template-parts/headers/homepage' );
		} ?>

		<?php 
		if (is_page() && get_field('header_show-breadcrumbs') && function_exists( 'dimox_breadcrumbs' )) {
			echo '<div class="container">';
			dimox_breadcrumbs();
			echo '</div>';
		} elseif ( is_single() || is_archive() || is_category() || is_tag() ) {
			echo '<div class="container">';
			dimox_breadcrumbs();
			echo '</div>';
		} ?>
		
		
		<?php if ( is_page() && get_field('header_show-title') ) {
			echo '<div class="container">';
			echo '<h1 class="page-title text-center">';
			the_title();
			echo '</h1>';
			echo '</div>';
		} ?>

	</header>
	
	<div class="page__content content">
