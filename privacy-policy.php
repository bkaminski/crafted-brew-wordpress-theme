<?php
/**
 * Template Name: Privacy Policy Template
 *
 * @package WordPress
 * @subpackage crafted-brew-wordpress-theme
 * 
 */
get_header(); ?>
<div class="container brewery">
	<div class="row">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<header>
			<div class="col">
				<h1 class="text-white mb-5 text-uppercase"><?php the_title(); ?></h1>
			</div>
		</header>
	</div>
	<div class="row mt-5">
		<div class="col-md-12 mb-4">
			<main>
				<?php the_content(); ?>
				
			</main>
				<div class="accordion" id="privacyAccordion1">
					<div class="card">
						<div class="card-header" id="headingOne">
							<h5 class="mb-0">
								<button class="btn btn-link collapsed ppolicy-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><strong><i class="far fa-minus-square fa-fw fa-lg"></i> Information collected by our website:</strong></button>
							</h5>
						</div>
						<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#privacyAccordion1">
							<div class="card-body">
								<ul>
									<li>
										<h3>What we collect</h3>
										Currently https://blueearlbrewing.com only has an "opt-in" email subscription form to collect any user data. We use a service called MailChimp to manage the storage of the email address, as well as to be able to email those that opted in to our email subscription system. MailChimp is a third party entity and <a href="https://mailchimp.com/legal/privacy/" target="_blank" rel="noopener">their own privacy policy</a> will apply to anyone that signs up using our mailing list option.
									</li>
									<li>
										<h3>What we do with the information collected</h3>
										We use the email address collected -- for those that opted in -- to send out special promotional offers, event invitations and notifications, as well as other items of interest regarding Blue Earl Brewing. No other user data is collected by https://blueearlbrewing.com at this time. Should the status of this change, it will be updated on this page. Please check back often.
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingTwo">
							<h5 class="mb-0">
								<button class="btn btn-link ppolicy-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><strong><i class="far fa-plus-square fa-fw fa-lg"></i> Controlling your personal information:</strong></button>
							</h5>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#privacyAccordion1">
							<div class="card-body">
								We will not sell, distribute or lease your personal information to third parties unless we have your permission or are required by law to do so. We may use your personal information to send you promotional information about third parties which we think you may find interesting if you tell us that you wish this to happen. You may request details of personal information which we hold about you under the Data Protection Act 1998. A small fee may be charged. If you would like a copy of the information held on you please <a href="mailto:socialmedia@blueearlbrewing.com" target="_blank" rel="noopener">write to or email us</a>.
								<br />
								If you believe that any information we are holding on you is incorrect or incomplete, <a href="mailto:socialmedia@blueearlbrewing.com" target="_blank" rel="noopener">write to or email us</a> as soon as possible. We will promptly correct any information found to be incorrect.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingThree">
							<h5 class="mb-0">
								<button class="btn btn-link ppolicy-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><strong><i class="far fa-plus-square fa-fw fa-lg"></i> Security:</strong></button>
							</h5>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#privacyAccordion1">
							<div class="card-body">
								<ul>
									<li>
										<h3>Website Security</h3>
										We are committed to ensuring that your information is secure. In order to prevent unauthorized access or disclosure, we have put in place suitable physical, electronic and managerial procedures to safeguard and secure the information we collect online.
									</li>
									<li>
										<h3>External Links</h3>
										Our website may contain links to other websites of interest. However, once you have used these links to leave our site, you should note that we do not have any control over that other website. Therefore, we cannot be responsible for the protection and privacy of any information which you provide whilst visiting such sites and such sites are not governed by this privacy statement. You should exercise caution and look at the privacy statement applicable to the website in question.
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingFour">
							<h5 class="mb-0">
								<button class="btn btn-link ppolicy-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><strong><i class="far fa-plus-square fa-fw fa-lg"></i> An introduction to cookies:</strong></button>
							</h5>
						</div>
						<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#privacyAccordion1">
							<div class="card-body">
								A cookie is a small data file that is automatically placed onto your computer's hard drive. Cookie files are created by our website and placed onto your device in order to analyze and influence your preferences or behavior. Analytical cookies are designed to track your journey and experience on our website - so that we may tailor your experience and gather data. Overall, cookies help us provide you with a better website, by enabling us to monitor which pages you find useful and which you do not. A cookie in no way gives us access to your computer or any personal information about you, other than the data you choose to share with us.
								<br />
								The majority of modern web browsers will automatically allow cookies to be placed onto your device. However you can usually modify your browser's settings in order to prevent any cookies from being placed onto your device. Setting your browser to block cookies may prevent you from taking full advantage of our website.

								<h3>Cookies deployed by our website:</h3>
								<ul>
									<li>ensure that functionality operates as intended</li>
									<li>remember your choices and preferences during and between visits</li>
									<li>allow you to share pages via popular social media networks including Facebook and Twitter</li>
									<li>track your visit for statistical analysis, allowing us to improve the usability, speed and security of our website</li>
								</ul>
								<h3>Cookies are not deployed to:</h3>
								<ul>
									<li>collect any personal identifiable information (without your express permission)</li>
									<li>collect any sensitive information (without your express permission)</li>
									<li>pass data to advertising networks</li>
									<li>pass personally identifiable data to third parties</li>
									<li>pay sales commissions</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingFive">
							<h5 class="mb-0">
								<button class="btn btn-link ppolicy-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"><strong><i class="far fa-plus-square fa-fw fa-lg"></i> Your consent for cookie deployment by our website:</strong></button>
							</h5>
						</div>
						<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#privacyAccordion1">
							<div class="card-body">
								Our website operates on an 'Implied Consent' basis. This means that we have assumed that you have 'opted-in' for our website to deploy cookies until you choose to deactivate them <u>within your browser settings</u> or via the instructions below. Below you can learn more about the specific cookies deployed by our website, and how they can be disabled.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingSix">
							<h5 class="mb-0">
								<button class="btn btn-link ppolicy-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix"><strong><i class="far fa-plus-square fa-fw fa-lg"></i> Cookies used by our website:</strong></button>
							</h5>
						</div>
						<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#privacyAccordion1">
							<div class="card-body">
								<ul>
						 			<li>
						 				<h3>Social Network Sharing</h3>
						 				We encourage users to share our content and/or like our on profile on the popular Social Media websites Facebook, Twitter, YouTube, Google+ and LinkedIn. In order to make 'Social Sharing' accessible, our website utilizes widgets either provided directly from the Social Networks and/or via widgets from third parties such as AddThis. Cookies and privacy implications from the social networks vary and will be <u>dependent on your nominated privacy settings with each respective Social Network</u>. Social Sharing buttons will only deploy cookies if you are signed in or logged in to that respective Social Network at the time of visiting our website.
						 			</li>
						 			<li>
						 				<h3>Analytical Tracking</h3>
						 				Our website has Google Analytics installed which allows us to track and compile anonymous visitor statistics. The information collected ranges from simple traffic volume to the type of browser you are viewing our website with. This information is valuable to us not just for marketing analysis and quantification, but to improve the usability, security and page load times of our website content. Google Analytics is a popular, secure, industry standard webmaster product from Google. The privacy and security of Google Analytics data is a high priority at Google that you can read more about on <a href="http://www.google.com/analytics/learn/privacy.html" target="_blank" rel="noopener">Google's Analytics Data Safeguarding page</a>. Google also offer a <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics Opt-out Browser Add-on</a> that will allow you to automatically Opt-out of all websites that track your activity via Google Analytics. No personal information is collected by Google Analytics.
						 			</li>
						 			<li>
						 				<h3>Wordpress</h3>
						 				Our website, either in full or in part, is built on the popular open-source CMS framework - WordPress. WordPress utilizes cookies to allow visitors to register, login and comment on our website's content. If you do not wish to participate in commenting on our website, WordPress will not deploy any cookies onto your device. Cookies will only be created by WordPress if you actively register or comment via the input fields on our website. <u>At this time, there is no ability to register or comment on https://blueearlbrewing.com, therefore no cookies are being deployed by WordPress CMS. This is subject to change over time.</u>
						 			</li>
					 			</ul>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingSeven">
							<h5 class="mb-0">
								<button class="btn btn-link ppolicy-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven"><strong><i class="far fa-plus-square fa-fw fa-lg"></i> Actual cookies deployed:</strong></button>
							</h5>
						</div>
						<div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#privacyAccordion1">
							<div class="card-body">
								Below is a table of information which lists all cookies deployed and used on our website.
						 		<div class="table-responsive">
						 			<table id="cookies-table" class="table table-bordered">
						 				<thead class="thead-dark">
						 					<tr>
						 						<th>Category</th>
						 						<th>Cookie Name</th>
						 						<th>Cookie Description</th>
						 					</tr>
						 				</thead>
						 				<tbody style="color: #333;">
						 					<tr class="table-warning">
						 						<td rowspan="1">Google Analytics (gtag.js)</td>
						 						<td>_ga, _gat_gtag_UA_119885337_1, _gid</td>
						 						<td>Google Analytics is a simple, easy-to-use tool that helps website owners measure how users interact with website content. As a user navigates between web pages, Google Analytics provides website owners JavaScript tags (libraries) to record information about the page a user has seen, for example the URL of the page. The Google Analytics JavaScript libraries use HTTP Cookies to "remember" what a user has done on previous pages / interactions with the website. More information on <a href="https://developers.google.com/analytics/devguides/collection/analyticsjs/cookie-usage" rel="noopener" target="_blank">these specific cookies here</a>.</td>
						 					</tr>
						 					<tr class="table-warning">
						 						<td>WordFence Security</td>
						 						<td class="wfcookie">wf_loginalerted_</td>
						 						<td>WordFence is a third party plug-in for WordPress and offers a wide variety of protection against attacks, malware, and other harmful actions taken against the website by hackers. This cookie only tracks login attempts and ip addresses of users attempting to log-in to this website. It also provides notification to website administrators of attacks, attempted attacks, malicious code injections, etc.</td>
						 					</tr>
						 					<tr class="table-warning">
						 						<td>AddThis</td>
						 						<td>loc, uid/uit, psc, di/dt, atuvc/bt/ssc/ssh/sshs/xtc</td>
						 						<td>Allows users to share content via Social Networking websites and email</td>
						 					</tr>
						 					<tr class="table-warning">
						 						<td>WordPress</td>
						 						<td>devicePixelRatio</td>
						 						<td>This cookie records your device's pixel ratio. If your screen resolution is a retina or Hi DPI screen, then the website may choose to serve you higher resolution graphics.</td>
						 					</tr>
						 				</tbody>
						 			</table>
						 		</div>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingEight">
							<h5 class="mb-0">
								<button class="btn btn-link ppolicy-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight"><strong><i class="far fa-plus-square fa-fw fa-lg"></i> How to disable cookies:</strong></button>
							</h5>
						</div>
						<div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#privacyAccordion1">
							<div class="card-body">
								Most modern browsers allow you to control your cookie settings for all websites that you browse. You can disable cookie deployment completely by editing your browser settings, however in doing this you may be limiting the functionality that is displayed on our website. To learn how to disable cookies on your preferred browser we recommend reading <a href="http://support.google.com/accounts/bin/answer.py?hl=en&amp;answer=61416" target="_blank" rel="noopener">this advice posted by Google</a>.

								If you are concerned about cookies tracking your movements on the Internet then you may be concerned about spyware. Spyware is the name given to a particular band of cookies that track personal information about you. There are many anti-spyware programs that you can use to prevent this from happening.
							</div>
						</div>
					</div>
					<br /><br />
					<?php the_tags('<span class="badge badge-primary mr-2">Related:</span> ' , ', ', ''); ?>
				</div>
			<?php endwhile; else : ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
	</div>
</div>
</div>
<script>
	document.addEventListener('DOMContentLoaded', function () {
		jQuery('.ppolicy-link').on('click', function () {
			var collapsed=jQuery(this).find('[data-fa-i2svg]').hasClass('fa-plus-square');
			jQuery('.btn-link').find('[data-fa-i2svg]').removeClass('fa-minus-square');
			jQuery('.btn-link').find('[data-fa-i2svg]').addClass('fa-plus-square');
			if(collapsed)
				jQuery(this).find('[data-fa-i2svg]').toggleClass('fa-plus-square fa-minus-square')
		});
	});
</script>
<?php get_footer(); ?>