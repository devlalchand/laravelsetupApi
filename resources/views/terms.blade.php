@extends('easy2inspect.app')

@section('content')

<section class="ContactPageSec"> 
	<div class="container">
		<div class="row">
			<div class="Banner_Text_Inner">
				<h2> Easy2Inspect </h2>
				<ul>
					<li><a href="{{ url('') }}">Home</a></li>
					<li><a href="{{ url('terms') }}">Terms of Service</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>


<section class="ContactPageSection">
	<div class="container">
		<div class="row">
	        <div class="col-md-12">
				<div class="LoginForm ContactDetail" id="common_page">

				@if(!empty($terms))
					@foreach($terms as $term)
					<div class="account-wall">
			            <h2 class="">
			            	{{ ucwords($term->title) }}
			            </h2>
		            	<p>{!! $term->description !!}</p>
		            </div>

		            <hr>
		            @endforeach
		        @else

					<div class="account-wall">
			            <h2 class="">
			            	No terms added.
			            </h2>
		            </div>

		        @endif

		            <!--<div class="account-wall">
			            <h2 class="">
			            	Communications
			            </h2>
		            	<p>By creating an Account on our service, you agree to subscribe to newsletters, marketing or promotional materials and other information we may send. However, you may opt out of receiving any, or all, of these communications from us by following the unsubscribe link or instructions provided in any email we send.</p>
		            </div>

		            <hr>

		             <div class="account-wall">
			            <h2 class="">
			            	Content
			            </h2>
		            	<p>Our Service allows you to post, link, store, share and otherwise make available certain information, text, graphics, videos, or other material (“Content”). You are responsible for the Content that you post on or through the Service, including its legality, reliability, and appropriateness.<br><br>

						By posting Content on or through the Service, You represent and warrant that: (i) the Content is yours (you own it) and/or you have the right to use it and the right to grant us the rights and license as provided in these Terms, and (ii) that the posting of your Content on or through the Service does not violate the privacy rights, publicity rights, copyrights, contract rights or any other rights of any person or entity. We reserve the right to terminate the account of anyone found to be infringing on a copyright.<br><br>

						You retain any and all of your rights to any Content you submit, post or display on or through the Service and you are responsible for protecting those rights. We take no responsibility and assume no liability for Content you or any third party posts on or through the Service. However, by posting Content using the Service you grant us the right and license to use, modify, publicly perform, publicly display, reproduce, and distribute such Content on and through the Service.<br><br>

						Easy2Inspect International Ltd has the right but not the obligation to monitor and edit all Content provided by users.<br><br>

						In addition, Content found on or through this Service are the property of Easy2Inspect International Ltd or used with permission. You may not distribute, modify, transmit, reuse, download, repost, copy, or use said Content, whether in whole or in part, for commercial purposes or for personal gain, without express advance written permission from us.</p>
		            </div>

		            <hr>

		            <div class="account-wall">
			            <h2 class="">
			            	Accounts
			            </h2>
		            	<p>When you create an account with us, you guarantee that you are above the age of 18, and that the information you provide us is accurate, complete, and current at all times. Inaccurate, incomplete, or obsolete information may result in the immediate termination of your account on the Service.<br><br>

						You are responsible for maintaining the confidentiality of your account and password, including but not limited to the restriction of access to your computer and/or account. You agree to accept responsibility for any and all activities or actions that occur under your account and/or password, whether your password is with our Service or a third-party service. You must notify us immediately upon becoming aware of any breach of security or unauthorized use of your account.<br><br>

						You may not use as a username the name of another person or entity or that is not lawfully available for use, a name or trademark that is subject to any rights of another person or entity other than you, without appropriate authorization. You may not use as a username any name that is offensive, vulgar or obscene.<br><br>

						We reserve the right to refuse service, terminate accounts, remove or edit content in our sole discretion.</p>
		            </div>

		            <hr>

		            <div class="account-wall">
			            <h2 class="">
			            	Links To Other Web Sites
			            </h2>
		            	<p>Our Service may contain links to third party web sites or services that are not owned or controlled by Easy2Inspect International Ltd.<br><br>

						Easy2Inspect International Ltd has no control over, and assumes no responsibility for the content, privacy policies, or practices of any third party web sites or services. We do not warrant the offerings of any of these entities/individuals or their websites.<br><br>

						You acknowledge and agree that Easy2Inspect International Ltd shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such third party web sites or services.<br><br>

						We strongly advise you to read the terms and conditions and privacy policies of any third party web sites or services that you visit.</p>
		            </div>

		            <hr>

		            <div class="account-wall">
			            <h2 class="">
			            	Termination
			            </h2>
		            	<p>We may terminate or suspend your account and bar access to the Service immediately, without prior notice or liability, under our sole discretion, for any reason whatsoever and without limitation, including but not limited to a breach of the Terms.<br><br>

						If you wish to terminate your account, you may simply discontinue using the Service.<br><br>

						All provisions of the Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.</p>
		            </div>

		            <hr>

		            <div class="account-wall">
			            <h2 class="">
			            	Indemnification
			            </h2>
		            	<p>You agree to defend, indemnify and hold harmless Easy2Inspect International Ltd and its licensee and licensors, and their employees, contractors, agents, officers and directors, from and against any and all claims, damages, obligations, losses, liabilities, costs or debt, and expenses (including but not limited to attorney’s fees), resulting from or arising out of a) your use and access of the Service, by you or any person using your account and password; b) a breach of these Terms, or c) Content posted on the Service.</p>
		            </div>

		            <hr>

		            <div class="account-wall">
			            <h2 class="">
			            	Limitation Of Liability
			            </h2>
		            	<p>In no event shall Easy2Inspect International Ltd, nor its directors, employees, partners, agents, suppliers, or affiliates, be liable for any indirect, incidental, special, consequential or punitive damages, including without limitation, loss of profits, data, use, goodwill, or other intangible losses, resulting from (i) your access to or use of or inability to access or use the Service; (ii) any conduct or content of any third party on the Service; (iii) any content obtained from the Service; and (iv) unauthorized access, use or alteration of your transmissions or content, whether based on warranty, contract, tort (including negligence) or any other legal theory, whether or not we have been informed of the possibility of such damage, and even if a remedy set forth herein is found to have failed of its essential purpose.</p>
		            </div>

		            <hr>

		            <div class="account-wall">
			            <h2 class="">
			            	Disclaimer
			            </h2>
		            	<p>Your use of the Service is at your sole risk. The Service is provided on an “AS IS” and “AS AVAILABLE” basis. The Service is provided without warranties of any kind, whether express or implied, including, but not limited to, implied warranties of merchantability, fitness for a particular purpose, non-infringement or course of performance.<br><br>

						Easy2Inspect International Ltd its subsidiaries, affiliates, and its licensors do not warrant that a) the Service will function uninterrupted, secure or available at any particular time or location; b) any errors or defects will be corrected; c) the Service is free of viruses or other harmful components; or d) the results of using the Service will meet your requirements.</p>
		            </div>

		            <hr>

		            <div class="account-wall">
			            <h2 class="">
			            	Exclusions
			            </h2>
		            	<p>Some jurisdictions do not allow the exclusion of certain warranties or the exclusion or limitation of liability for consequential or incidental damages, so the limitations above may not apply to you.</p>
		            </div>

		            <hr>

		            <div class="account-wall">
			            <h2 class="">
			            	Governing Law
			            </h2>
		            	<p>These Terms shall be governed and construed in accordance with the laws of United States, without regard to its conflict of law provisions.<br><br>

						Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights. If any provision of these Terms is held to be invalid or unenforceable by a court, the remaining provisions of these Terms will remain in effect. These Terms constitute the entire agreement between us regarding our Service, and supersede and replace any prior agreements we might have had between us regarding the Service.</p>
		            </div>

		            <hr>
		            
		            <div class="account-wall">
			            <h2 class="">
			            	Changes
			            </h2>
		            	<p>We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material we will provide at least 30 days notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.<br><br>

						By continuing to access or use our Service after any revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, you are no longer authorized to use the Service.</p>
		            </div>

		            <hr>

		            <div class="account-wall">
			            <h2 class="">
			            	Contact Us
			            </h2>
		            	<p>If you have any questions about these Terms, please contact us.</p>
		            </div> -->		            
		        </div>
	        </div>
		</div>
	</div>
</section>
























@endsection


