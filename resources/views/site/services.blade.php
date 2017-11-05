@extends('layouts.master')
@section('content')
<body class="index-3">
<section id="content">
	<div class="full-width-container block-1">
		<div class="container">
			<div class="row">
				<div class="grid_12">
					<header>
						<h2><span> Our Services</span></h2>
					</header>
				</div>
			</div>
			<div class="row">
				<div class="grid_12">
					<article class="clearfix">
						<div class="grid_2 alpha">
							<div class="img_container"><img src="images/housePF.jpg" alt="img"></div>
						</div>
						<div class="grid_5">
							<h5><a href="#">Property Verification</a> (Starts From- Rs 3000)</h5>
                            <ul>
                                <li><a href="/book?service=propertyVerify">Property Verification     Rs. 5000</a></li>
                                <li><a href="/book?service=fraudCheck">Fraud and Forgery Check       Rs. 4000</a></li>
                                <li><a href="/book?service=enroachmentCheck">Enroachment Check       Rs. 3000</a></li>
                                <li><a href="/book?service=occuppancyCertificateCheck">Occupancy Certificate Check Rs. 3500</a></li>
                            </ul>
                            <a href="/book" class="btn">Book Now</a>
						</div>				
						<div class="grid_5">
							<h5><a href="">Property Registration</a> (Starts From- Rs 1000)</h5>
							<ul>
                                <li><a href="/book?service=saleAgreementAndFranking">Sale Agreement and Franking Rs. 2500</a></li>
                                <li><a href="/book?service=saleAndDeed">Sale Deed and Registration Rs. 2500</a></li>
                                <li><a href="/book?service=resalePropertyRegistration">Resale Property Registration  Rs. 9000</a></li>
                                <li><a href="/book?service=saleDocumentReview">Sale Document Review Rs. 2000</a></li>
                                <li><a href="/book?service=saleAgreementReview">Sale Agreement Review Rs. 1000</a></li>
                            </ul>
                            <a href="/book" class="btn">Book Now</a>
						</div>
					</article>
					<article class="clearfix">
						<div class="grid_2 alpha">
							<div class="img_container"><img src="images/propVal.jpg" alt="img"></div>
						</div>
                         <div class="grid_5">
							<h5><a href="#">Agreements (Starts From- Rs. 400)</a></h5>
                             <ul>
                                <li><a href="/book?service=encumbranceCertificate">Encumbrance Certificate Rs. 1500</a></li>
                                <li><a href="/book?service=generalPowerAttorney">General Power of Attorney Rs. 2000</a></li>
                                <li><a href="/book?service=giftReleaseDeed">Gift and Release Deed Rs. 2500</a></li>
                                <li><a href="/book?service=leaseAgreement">Lease Agreement Rs. 2000</a></li>
                                <li><a href="/book?service=memorandumUnderstanding">Memorandum of Understanding Rs. 400</a></li>
                                <li><a href="/book?service=mortgageAgreement">Mortgage Agreement Rs. 400</a></li>
                                <li><a href="/book?service=rectificationDeed">Rectification Deed Rs. 2500</a></li>
                                <li><a href="/book?service=rentalAgreement">Rental Agreement Rs. 400</a></li>
                                <li><a href="/book?service=saleAgreementFranking">Sale Agreement and Franking Rs. 2500</a></li>
                                <li><a href="/book?service=saleAgreementReview">Sale Agreement Review Rs. 1000</a></li>
                                <li><a href="/book?service=saleDeedRegistration">Sale Deed and Registration Rs. 2500</a></li>
                                <li><a href="/book?service=saleDocumentReview">Sale Document Review Rs. 2000</a></li>
                                <li><a href="/book?service=willsRegistration">Wills and Registration Rs. 3000</a></li>
                            </ul>
							<br><a href="/book" class="btn">Book Now</a>
						</div>
						<div class="grid_5">
							<h5><a href="#">Property Inspection</a></h5>
                            <ul> 
                            <li><a href="/book?service=homeInspectionSurvey">Home Inspection/Land Survey Rs. 7500</a></li>
							</ul>
                            <br><a href="/book" class="btn">Book Now</a>
						</div>
					</article>
				</div>
				
			</div>
		</div>
	</div>
</section>
</body>
@endsection