@include('includes.header-portfolio')



<!--
        ===================
           Home
        ===================
        -->
<section class="mh-home image-bg home-2-img" id="mh-home">
    <div class="img-foverlay img-color-overlay">
        <div class="container">
            <div class="row section-separator xs-column-reverse vertical-middle-content home-padding">
                <div class="col-sm-6">
                    <div class="mh-header-info">
                        <div class="mh-promo wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
                            <span>{{ $user->welcome_greeting}}</span>
                        </div>

                        <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">{{ $user->name}}</h2>
                        <h4 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">{{ $user->title_job}}</h4>

                        <ul>
                            <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s"><i class="fa fa-envelope"></i><a href="mailto:">{{ $user->email}}</a></li>
                            <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s"><i class="fa fa-phone"></i><a href="callto:">{{ $user->tel}}</a></li>
                            <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s"><i class="fa fa-map-marker"></i>
                                <address>{{ $user->address}}</address>
                            </li>
                        </ul>

                        @if ($user->rrss)
                        <ul class="social-icon wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                            <li><a href="{{ $user->rrss->facebook_url }}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{ $user->rrss->twitter_url }}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{ $user->rrss->github_url }}"><i class="fa fa-github"></i></a></li>
                        </ul>
                        @endif
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="hero-img wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                        <div class="img-border">
                            <img src="{{asset('storage/'.$user->image)}}" alt="{{ $user->name}}" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--
        ===================
           ABOUT
        ===================
        -->
<section class="mh-about" id="mh-about">
    <div class="container">
        <div class="row section-separator">
            <div class="col-sm-12 col-md-6">
                <div class="mh-about-img shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                    <img src="{{asset('storage/'.$user->about_me_image)}}" alt="{{ $user->name}}" class="img-fluid">
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="mh-about-inner">
                    <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">{{ $user->about_me_title}}</h2>
                    <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">{{ $user->excerpt}}</p>
                    <div class="mh-about-tag wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                        <ul>
                            @foreach ($user->skill as $skill)
                            <li><span>{{ $skill->name}}</span></li>
                            @endforeach
                        </ul>
                    </div>
                    <a href="#" class="btn btn-fill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">Downlaod CV <i class="fa fa-download"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--
        ===================
           SERVICE
        ===================
        -->
<section class="mh-service">
    <div class="container">
        <div class="row section-separator">
            <div class="col-sm-12 text-center section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                <h2>{{ $user->what_i_do_title}}</h2>
            </div>
            @foreach ($user->service->slice(0, 3) as $service)
            <div class="col-sm-4 mt-4">
                <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                    <i class="{{ $service->icon }}"></i>
                    <h3>{{ $service->name }}</h3>
                    <p>{{ $service->description }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!--
        ===================
          FEATURE PROJECTS
        ===================
        -->
<section class="mh-featured-project image-bg featured-img-one">
    <div class="img-color-overlay">
        <div class="container">
            <div class="row section-separator">
                <div class="section-title col-sm-12">
                    <h3>Featured Projects</h3>
                </div>
                <div class="col-sm-12">
                    <div class="mh-single-project-slide-by-side row">
                        <!-- Project Items -->
                        @foreach ($user->project as $project)
                        <div class="col-sm-12 mh-featured-item">
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="mh-featured-project-img shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                        <img src="{{ asset('assets/images/' . $project->image) }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="mh-featured-project-content">
                                        <h4 class="project-category wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">{{ $project->category }}</h4>
                                        <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">{{ $project->name }}</h2>
                                        <span class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">{{ $project->caption }}</span>
                                        <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">{{ $project->description }}</p>
                                        <a href="#" class="btn btn-fill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">View Details</a>
                                        <div class="mh-testimonial mh-project-testimonial wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.9s">
                                            <blockquote>
                                                <q>{{ $project->quote }}</q>
                                                <cite>- {{ $project->author }}</cite>
                                            </blockquote>
                                            <blockquote>
                                                <q>{{ $project->quote }}</q>
                                                <cite>- {{ $project->author }}</cite>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div> <!-- End: .row -->
        </div>
    </div>
</section>

<!--
        ===================
           SKILLS
        ===================
        -->
<section class="mh-skills" id="mh-skills">
    <div class="home-v-img">
        <div class="container">
            <div class="row section-separator">
                <div class="section-title text-center col-sm-12">
                    <h2>Skills</h2>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="mh-skills-inner">
                        <div class="mh-professional-skill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <h3>{{ $user->techical_skills_title}}</h3>
                            <div class="each-skills">
                                @foreach ($user->skill as $skill)
                                <div class="candidatos">
                                    <div class="parcial">
                                        <div class="info">
                                            <div class="nome">{{ $skill->name}}</div>
                                            <div class="percentagem-num">{{ $skill->percent}}</div>
                                        </div>
                                        <div class="progressBar">
                                            <div class="percentagem" style="width: {{ $skill->percent}}%;"></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="mh-professional-skills wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                        <h3>{{ $user->professional_skills_title}}</h3>
                        <ul class="mh-professional-progress">
                            @foreach ($user->professionalSkill->slice(0, 6) as $professionalSkill)
                            <li>
                                <div class="mh-progress mh-progress-circle" data-progress="{{ $professionalSkill->percent }}"></div>
                                <div class="pr-skill-name">{{ $professionalSkill->name }}</div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--
        ===================
           EXPERIENCES
        ===================
        -->
<section class="mh-experince image-bg featured-img-one" id="mh-experience">
    <div class="img-color-overlay">
        <div class="container">
            <div class="row section-separator">
                <div class="col-sm-12 col-md-6">
                    <div class="mh-education">
                        <h3 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">{{ $user->education_title}}</h3>
                        <div class="mh-education-deatils">
                            <!-- Education Institutes-->
                            @foreach ($user->education as $education)
                            <div class="mh-education-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                <h4>{{ $education->degree}} <a href="#">{{ $education->school_name }}</a></h4>
                                <div class="mh-eduyear">{{ $education->start_date }}-{{ $education->finish_date }}</div>
                                <p>{{ $education->description}}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="mh-work">
                        <h3>{{ $user->work_experience_title}}</h3>
                        <div class="mh-experience-deatils">
                            <!-- Education Institutes-->

                            @foreach ($user->workExperience as $workExperience)
                            <div class="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                                <h4>{{ $workExperience->title_job }} <a href="#">{{ $workExperience->name }}</a></h4>
                                <div class="mh-eduyear">{{ $workExperience->start_date}}-{{ $workExperience->finish_date}}</div>
                                <span>Responsibility :</span>
                                <ul class="work-responsibility">
                                    @foreach (explode(',', $workExperience->responsibility) as $responsibility)
                                    <li><i class="fa fa-circle"></i>{{ $responsibility }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<!--
        ===================
           PORTFOLIO
        ===================
        -->
<section class="mh-portfolio" id="mh-portfolio">
    <div class="container">
        <div class="row section-separator">
            <div class="section-title col-sm-12 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
                <h3>Recent Portfolio</h3>
            </div>
            <div class="part col-sm-12">
                <div class="portfolio-nav col-sm-12" id="filter-button">
                    <ul>
                        <li data-filter="*" class="current wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s"> <span>All Categories</span></li>
                        <li data-filter=".user-interface" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s"><span>Web Design</span></li>
                        <li data-filter=".branding" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s"><span>Branding</span></li>
                        <li data-filter=".mockup" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s"><span>Mockups</span></li>
                        <li data-filter=".ui" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s"><span>Photography</span></li>
                    </ul>
                </div>
                <div class="mh-project-gallery col-sm-12 wow fadeInUp" id="project-gallery" data-wow-duration="0.8s" data-wow-delay="0.5s">
                    <div class="portfolioContainer row">
                        <div class="grid-item col-md-4 col-sm-6 col-xs-12 user-interface">
                            <figure>
                                <img src="assets/images/portfolio/g1.jpg" alt="img04">
                                <figcaption class="fig-caption">
                                    <i class="fa fa-search"></i>
                                    <h5 class="title">Creative Design</h5>
                                    <span class="sub-title">Photograpy</span>
                                    <a data-fancybox data-src="#mh"></a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="grid-item col-md-4 col-sm-6 col-xs-12 ui mockup">
                            <figure>
                                <img src="assets/images/portfolio/g2.png" alt="img04">
                                <figcaption class="fig-caption">
                                    <i class="fa fa-search"></i>
                                    <h5 class="title">Creative Design</h5>
                                    <span class="sub-title">Photograpy</span>
                                    <a href="assets/images/portfolio/g2.png" data-fancybox data-src="#mh"></a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="grid-item col-md-4 col-sm-6 col-xs-12 user-interface">
                            <figure>
                                <img src="assets/images/portfolio/g3.png" alt="img04">
                                <figcaption class="fig-caption">
                                    <i class="fa fa-search"></i>
                                    <h5 class="title">Creative Design</h5>
                                    <span class="sub-title">Photograpy</span>
                                    <a href="assets/images/portfolio/g3.png" data-fancybox data-src="#mh"></a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="grid-item col-md-4 col-sm-6 col-xs-12 branding">
                            <figure>
                                <img src="assets/images/portfolio/g5.png" alt="img04">
                                <figcaption class="fig-caption">
                                    <i class="fa fa-search"></i>
                                    <h5 class="title">Creative Design</h5>
                                    <span class="sub-title">Photograpy</span>
                                    <a href="assets/images/portfolio/g5.png" data-fancybox data-src="#mh"></a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="grid-item col-md-4 col-sm-6 col-xs-12 user-interface">
                            <figure>
                                <img src="assets/images/portfolio/g4.png" alt="img04">
                                <figcaption class="fig-caption">
                                    <i class="fa fa-search"></i>
                                    <h5 class="title">Creative Design</h5>
                                    <span class="sub-title">Photograpy</span>
                                    <a href="assets/images/portfolio/g4.png" data-fancybox data-src="#mh"></a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="grid-item col-md-4 col-sm-6 col-xs-12 branding">
                            <figure>
                                <img src="assets/images/portfolio/g6.png" alt="img04">
                                <figcaption class="fig-caption">
                                    <i class="fa fa-search"></i>
                                    <h5 class="title">Creative Design</h5>
                                    <span class="sub-title">Photograpy</span>
                                    <a href="assets/images/portfolio/g6.png" data-fancybox data-src="#mh"></a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="grid-item col-md-4 col-sm-6 col-xs-12 branding">
                            <figure>
                                <img src="assets/images/portfolio/g8.png" alt="img04">
                                <figcaption class="fig-caption">
                                    <i class="fa fa-search"></i>
                                    <h5 class="title">Creative Design</h5>
                                    <span class="sub-title">Photograpy</span>
                                    <a href="assets/images/portfolio/g8.png" data-fancybox data-src="#mh"></a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="grid-item col-md-4 col-sm-6 col-xs-12 ui">
                            <figure>
                                <img src="assets/images/portfolio/g9.png" alt="img04">
                                <figcaption class="fig-caption">
                                    <i class="fa fa-search"></i>
                                    <h5 class="title">Creative Design</h5>
                                    <span class="sub-title">Photograpy</span>
                                    <a href="assets/images/portfolio/g9.png" data-fancybox data-src="#mh"></a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="grid-item col-md-4 col-sm-6 col-xs-12 branding">
                            <figure>
                                <img src="assets/images/portfolio/g7.jpg" alt="img04">
                                <figcaption class="fig-caption">
                                    <i class="fa fa-search"></i>
                                    <h5 class="title">Creative Design</h5>
                                    <span class="sub-title">Photograpy</span>
                                    <a href="assets/images/portfolio/g7.jpg" data-fancybox="gallery"></a>
                                </figcaption>
                            </figure>
                        </div>
                    </div> <!-- End: .grid .project-gallery -->
                </div> <!-- End: .grid .project-gallery -->
            </div> <!-- End: .part -->
        </div> <!-- End: .row -->
    </div>
    <div class="mh-portfolio-modal" id="mh">
        <div class="container">
            <div class="row mh-portfolio-modal-inner">
                <div class="col-sm-5">
                    <h2>Wrap - A campanion plugin</h2>
                    <p>Wrap is a clean and elegant Multipurpose Landing Page Template.
                        It will fit perfectly for Startup, Web App or any type of Web Services.
                        It has 4 background styles with 6 homepage styles. 6 pre-defined color scheme.
                        All variations are organized separately so you can use / customize the template very easily.</p>

                    <p>It is a clean and elegant Multipurpose Landing Page Template.
                        It will fit perfectly for Startup, Web App or any type of Web Services.
                        It has 4 background styles with 6 homepage styles. 6 pre-defined color scheme.
                        All variations are organized separately so you can use / customize the template very easily.</p>
                    <div class="mh-about-tag">
                        <ul>
                            <li><span>php</span></li>
                            <li><span>html</span></li>
                            <li><span>css</span></li>
                            <li><span>php</span></li>
                            <li><span>wordpress</span></li>
                            <li><span>React</span></li>
                            <li><span>Javascript</span></li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-fill">Live Demo</a>
                </div>
                <div class="col-sm-7">
                    <div class="mh-portfolio-modal-img">
                        <img src="assets/images/pr-0.jif" alt="" class="img-fluid">
                        <p>All variations are organized separately so you can use / customize the template very easily.</p>
                        <img src="assets/images/pr-1.jif" alt="" class="img-fluid">
                        <p>All variations are organized separately so you can use / customize the template very easily.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--
        ===================
           QUATES
        ===================
        -->
<section class="mh-quates image-bg home-2-img">
    <div class="img-color-overlay">
        <div class="container">
            <div class="row section-separator">
                <div class="each-quates col-sm-12 col-md-6">
                    <h3 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Interested to Work?</h3>
                    <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat. Mirum est notare quam littera gothica.
                        quam nunc putamus parum claram,</p>
                    <a href="#mh-contact" class="btn btn-fill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">Contact</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--
        ===================
           PRICING
        ===================
        -->
<section class="mh-pricing" id="mh-pricing">
    <div class="">
        <div class="container">
            <div class="row section-separator">
                <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <h3>Pricing Table</h3>
                </div>
                @foreach ($user->pricing as $pricing)
                <div class="col-sm-12 col-md-4">
                    <div class="mh-pricing dark-bg shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                        <i class="fa fa-calendar"></i>
                        <h4>{{ $pricing->title_job }}</h4>
                        <p>{{ $pricing->description }}</p>
                        <h5>${{ $pricing->price }}</h5>
                        <ul>
                            @foreach (explode(',', $pricing->jobs) as $jobs)
                            <li>{{ $jobs }}</li>
                            @endforeach
                        </ul>
                        <a href="#" class="btn btn-fill">Hire Me</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!--
        ===================
           BLOG
        ===================
        -->
<section class="mh-blog image-bg featured-img-two" id="mh-blog">
    <div class="img-color-overlay">
        <div class="container">
            <div class="row section-separator">
                <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <h3>Featured Posts</h3>
                </div>
                @foreach ($user->post as $post)
                <div class="col-sm-12 col-md-4">
                    <div class="mh-blog-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                        <img src="{{ asset('assets/images/' . $post->image) }}" alt="" class="img-fluid">
                        <div class="blog-inner">
                            <h2><a href="{{ $post->url }}">{{ $post->title }}</a></h2>
                            <div class="mh-blog-post-info">
                                <ul>
                                    <li><strong>Post On</strong><a href="#">{{ $post->date }}</a></li>
                                    <li><strong>By</strong><a href="#">{{ $post->user }}</a></li>
                                </ul>
                            </div>
                            <p>{{ $post->content }}</p>
                            <a href="{{ $post->url }}">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!--
        ===================
           Testimonial
        ===================
        -->
<section class="mh-testimonial" id="mh-testimonial">
    <div class="home-v-img">
        <div class="container">
            <div class="row section-separator">
                <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <h3>Client Reviews</h3>
                </div>
                <div class="col-sm-12 wow fadeInUp" id="mh-client-review" data-wow-duration="0.8s" data-wow-delay="0.3s">
                    @foreach ($user->review as $review)
                    <div class="each-client-item">
                        <div class="mh-client-item dark-bg black-shadow-1">
                            <img src="{{ asset('assets/images/' . $review->image) }}" alt="" class="img-fluid">
                            <p>{{ $review->quote }}</p>
                            <h4>{{ $review->author }}</h4>
                            <span>{{ $review->title_job }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


@include('includes.footer-portfolio')