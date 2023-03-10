<section class="section-box mt-50">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Jobs of the day</h2>
            <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Search and connect with the right candidates faster. </p>
            <div class="list-tabs mt-40">
                <ul class="nav nav-tabs" role="tablist">
                    <li><a class="active" id="nav-tab-job-1" href="#tab-job-1" data-bs-toggle="tab" role="tab" aria-controls="tab-job-1" aria-selected="true"><img src="assets/imgs/page/homepage1/management.svg" alt="jobBox"> Management</a></li>
                    <li><a id="nav-tab-job-2" href="#tab-job-2" data-bs-toggle="tab" role="tab" aria-controls="tab-job-2" aria-selected="false"><img src="assets/imgs/page/homepage1/marketing.svg" alt="jobBox"> Marketing &amp; Sale</a></li>
                    <li><a id="nav-tab-job-3" href="#tab-job-3" data-bs-toggle="tab" role="tab" aria-controls="tab-job-3" aria-selected="false"><img src="assets/imgs/page/homepage1/finance.svg" alt="jobBox"> Finance</a></li>
                    <li><a id="nav-tab-job-4" href="#tab-job-4" data-bs-toggle="tab" role="tab" aria-controls="tab-job-4" aria-selected="false"><img src="assets/imgs/page/homepage1/human.svg" alt="jobBox"> Human Resource</a></li>
                    <li><a id="nav-tab-job-5" href="#tab-job-5" data-bs-toggle="tab" role="tab" aria-controls="tab-job-5" aria-selected="false"><img src="assets/imgs/page/homepage1/retail.svg" alt="jobBox"> Retail &amp; Products</a></li>
                    <li><a id="nav-tab-job-6" href="#tab-job-6" data-bs-toggle="tab" role="tab" aria-controls="tab-job-6" aria-selected="false"><img src="assets/imgs/page/homepage1/content.svg" alt="jobBox"> Content Writer</a></li>
                </ul>
            </div>
        </div>

        <div class="mt-70">
            <div class="tab-content" id="myTabContent-1">
                <div class="tab-pane fade show active" id="tab-job-1" role="tabpanel" aria-labelledby="tab-job-1">
                    <div class="row">
                        <?php foreach ($job as $item) : ?>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                <div class="card-grid-2 hover-up">
                                    <div class="card-grid-2-image-left"><span class="flash"></span>
                                        <div class="image-box"><img src="assets/imgs/brands/brand-1.png" alt="jobBox"></div>
                                        <div class="right-info"><a class="name-job" href="company-details.html"><?= $item->judul ?></a><span class="location-small">New York, US</span></div>
                                    </div>
                                    <div class="card-block-info">
                                        <h6><a href="job-details.html">UI / UX Designer fulltime</a></h6>
                                        <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                                        <p class="font-sm color-text-paragraph mt-15"><?= $item->deskripsi ?></p>
                                        <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Photoshop</a>
                                        </div>
                                        <div class="card-2-bottom mt-30">
                                            <div class="row">
                                                <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                                                <div class="col-lg-5 col-5 text-end">
                                                    <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-job-2" role="tabpanel" aria-labelledby="tab-job-2">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-6.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Quora JSC</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">Senior System Engineer</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">PHP</a><a class="btn btn-grey-small mr-5" href="job-details.html">Android</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-7.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Nintendo</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">Products Manager</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">ASP .Net</a><a class="btn btn-grey-small mr-5" href="job-details.html">Figma</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-4.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Dailymotion</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">Frontend Developer</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Typescript</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Java</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-5.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Linkedin</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">React Native Web Developer</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Angular</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-8.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Periscope</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">Lead Quality Control QA</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">iOS</a><a class="btn btn-grey-small mr-5" href="job-details.html">Laravel</a><a class="btn btn-grey-small mr-5" href="job-details.html">Golang</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-1.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">LinkedIn</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">UI / UX Designer fulltime</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Photoshop</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-2.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Adobe Ilustrator</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">Full Stack Engineer</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">React</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">NodeJS</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-3.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Bing Search</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">Java Software Engineer</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Python</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">AWS</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Photoshop</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-job-3" role="tabpanel" aria-labelledby="tab-job-3">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-4.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Dailymotion</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">Frontend Developer</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Typescript</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Java</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-5.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Linkedin</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">React Native Web Developer</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Angular</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-6.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Quora JSC</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">Senior System Engineer</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">PHP</a><a class="btn btn-grey-small mr-5" href="job-details.html">Android</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-7.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Nintendo</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">Products Manager</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">ASP .Net</a><a class="btn btn-grey-small mr-5" href="job-details.html">Figma</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-8.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Periscope</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">Lead Quality Control QA</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">iOS</a><a class="btn btn-grey-small mr-5" href="job-details.html">Laravel</a><a class="btn btn-grey-small mr-5" href="job-details.html">Golang</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-1.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">LinkedIn</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">UI / UX Designer fulltime</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Photoshop</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-2.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Adobe Ilustrator</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">Full Stack Engineer</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">React</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">NodeJS</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-3.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Bing Search</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">Java Software Engineer</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Python</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">AWS</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Photoshop</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-job-4" role="tabpanel" aria-labelledby="tab-job-4">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-7.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Nintendo</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">Products Manager</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">ASP .Net</a><a class="btn btn-grey-small mr-5" href="job-details.html">Figma</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-8.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Periscope</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">Lead Quality Control QA</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">iOS</a><a class="btn btn-grey-small mr-5" href="job-details.html">Laravel</a><a class="btn btn-grey-small mr-5" href="job-details.html">Golang</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-4.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Dailymotion</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">Frontend Developer</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Typescript</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Java</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-5.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Linkedin</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">React Native Web Developer</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Angular</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-6.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Quora JSC</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">Senior System Engineer</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">PHP</a><a class="btn btn-grey-small mr-5" href="job-details.html">Android</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-1.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">LinkedIn</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">UI / UX Designer fulltime</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Photoshop</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-2.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Adobe Ilustrator</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">Full Stack Engineer</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">React</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">NodeJS</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-3.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Bing Search</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">Java Software Engineer</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Python</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">AWS</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Photoshop</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-job-5" role="tabpanel" aria-labelledby="tab-job-5">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-8.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Periscope</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">Lead Quality Control QA</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">iOS</a><a class="btn btn-grey-small mr-5" href="job-details.html">Laravel</a><a class="btn btn-grey-small mr-5" href="job-details.html">Golang</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-1.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">LinkedIn</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">UI / UX Designer fulltime</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Photoshop</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-4.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Dailymotion</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">Frontend Developer</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Typescript</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Java</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-5.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Linkedin</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">React Native Web Developer</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Angular</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-6.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Quora JSC</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">Senior System Engineer</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">PHP</a><a class="btn btn-grey-small mr-5" href="job-details.html">Android</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-7.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Nintendo</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">Products Manager</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">ASP .Net</a><a class="btn btn-grey-small mr-5" href="job-details.html">Figma</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-2.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Adobe Ilustrator</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">Full Stack Engineer</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">React</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">NodeJS</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-3.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Bing Search</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">Java Software Engineer</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Python</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">AWS</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Photoshop</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-job-6" role="tabpanel" aria-labelledby="tab-job-6">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-8.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Periscope</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">Lead Quality Control QA</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">iOS</a><a class="btn btn-grey-small mr-5" href="job-details.html">Laravel</a><a class="btn btn-grey-small mr-5" href="job-details.html">Golang</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-1.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">LinkedIn</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">UI / UX Designer fulltime</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Adobe XD</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Figma</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Photoshop</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-2.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Adobe Ilustrator</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">Full Stack Engineer</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">React</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">NodeJS</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-3.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Bing Search</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">Java Software Engineer</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Python</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">AWS</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Photoshop</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-4.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Dailymotion</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">Frontend Developer</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Typescript</a><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Java</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-5.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Linkedin</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">React Native Web Developer</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Angular</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-6.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Quora JSC</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">Senior System Engineer</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">PHP</a><a class="btn btn-grey-small mr-5" href="job-details.html">Android</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="card-grid-2 hover-up">
                                <div class="card-grid-2-image-left"><span class="flash"></span>
                                    <div class="image-box"><img src="assets/imgs/brands/brand-7.png" alt="jobBox"></div>
                                    <div class="right-info"><a class="name-job" href="company-details.html">Nintendo</a><span class="location-small">New York, US</span></div>
                                </div>
                                <div class="card-block-info">
                                    <h6><a href="job-details.html">Products Manager</a></h6>
                                    <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                                    <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                                    <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">ASP .Net</a><a class="btn btn-grey-small mr-5" href="job-details.html">Figma</a>
                                    </div>
                                    <div class="card-2-bottom mt-30">
                                        <div class="row">
                                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                                            <div class="col-lg-5 col-5 text-end">
                                                <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    console.log('object :>> tesssssss');
</script>