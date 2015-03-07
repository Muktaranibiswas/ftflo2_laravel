@extends('layouts.about')
@section('content')
    <div class="headline">
    						<h3>Meet Our Team</h3>
    					</div>
<div class="row thumbnails">
						<div class="col-md-6">
							<div class="meet-our-team">
								{{$team->name}}
								<br>
									{{$team->designation}}
								<img src="../../assets/admin/pages/media/pages/2.jpg" alt="" class="img-responsive"/>
								<div class="team-info">
									<p>
									{{$team->description}}
									</p>

									<ul class="social-icons pull-right">
										<li>
											<a href="javascript:;" data-original-title="twitter" class="twitter">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-original-title="facebook" class="facebook">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-original-title="linkedin" class="linkedin">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-original-title="Goole Plus" class="googleplus">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-original-title="skype" class="skype">
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
</div>
@endsection

						{{--<div class="col-md-3">
							<div class="meet-our-team">
								{{$team->name}}
								<img src="../../assets/admin/pages/media/pages/3.jpg" alt="" class="img-responsive"/>
								<div class="team-info">
									<p>
										 Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...
									</p>
									<ul class="social-icons pull-right">
										<li>
											<a href="javascript:;" data-original-title="twitter" class="twitter">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-original-title="facebook" class="facebook">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-original-title="linkedin" class="linkedin">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-original-title="Goole Plus" class="googleplus">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-original-title="skype" class="skype">
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="meet-our-team">
								{{$team->name}}
								<img src="../../assets/admin/pages/media/pages/2.jpg" alt="" class="img-responsive"/>
								<div class="team-info">
									<p>
										 Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...
									</p>
									<ul class="social-icons pull-right">
										<li>
											<a href="javascript:;" data-original-title="twitter" class="twitter">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-original-title="facebook" class="facebook">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-original-title="linkedin" class="linkedin">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-original-title="Goole Plus" class="googleplus">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-original-title="skype" class="skype">
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="meet-our-team">
								{{$team->name}}
								<img src="../../assets/admin/pages/media/pages/3.jpg" alt="" class="img-responsive"/>
								<div class="team-info">
									<p>
										 Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem...
									</p>
									<ul class="social-icons pull-right">
										<li>
											<a href="javascript:;" data-original-title="twitter" class="twitter">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-original-title="facebook" class="facebook">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-original-title="linkedin" class="linkedin">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-original-title="Goole Plus" class="googleplus">
											</a>
										</li>
										<li>
											<a href="javascript:;" data-original-title="skype" class="skype">
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					@endsection--}}