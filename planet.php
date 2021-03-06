<?php
$color = "#219E44";
$titulo = "Planet";
$descricao = "The UNITAR is a dedicated training arm of the United Nations system. UNITAR provides training and capacity development activities to assist mainly developing countries.";
$body_class = "pilar goto-color";
$page_class = "planet";
include('header.php');
?>
        <section class="hero-pilar bg-<?php echo $page_class ?>">
            <div class="hero-pilar-image">
                <div class="hero-icon-text">
                    <h1 class="bg-<?php echo $page_class ?>"><a href="https://www.unitar.org/sustainable-development-goals/planet" target="_blank"><?php echo $titulo ?></a>
                        <i><?php include('assets/images/pillar-hero-icon-'.$page_class.'.svg'); ?></i>
                    </h1>
                </div>
                <div class="image-mask">
                    <div class="image-inner" style="background-image: url(assets/images/hero-pilar-<?php echo $page_class ?>.jpg);"></div>
                </div>
            </div>
            <div class="container text-white">
                <div class="row">
                    <div class="col-10 col-md-6 offset-md-6 d-flex flex-column align-items-start justify-content-center">
                        <div class="pilar-hero-text pilar-hero-text-1 d-flex align-items-end">
                            <div class="inner">
								<img src="assets/images/pilar-hero-detalhe-1.svg" alt="" class="hero-pilar-detalhe-1">
                                <p>Strengthen capacities to foster a green, <br>low-carbon and climate resilient transition</p>
                                <p>Strengthen capacities to manage <br>dangerous chemicals and wastes in a <br>sound and sustainable manner</p>
                                <p>Improve the conservation <br>and sustainable use of <br>natural resources</p>
                            </div>
                        </div>
                        <div class="pilar-hero-text pilar-hero-text-2">
                            <div class="inner font-size-3">
                                <p>Support the conservation, <br>restoration and safeguarding <br>of our planet for present and <br>future generations</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pilar-infos bg-<?php echo $page_class ?> text-white">
            <img src="assets/images/pilar-hero-detalhe-2.svg" alt="" class="hero-pilar-detalhe-2">
            <div class="container c-pb">
                <div class="row">
                    <div class="col-md-9 col-lg-5 col-xl-6 offset-md-2 offset-xl-4">
                        <div class="row">
                            <div class="pie-container">
                                <svg id="pie" data-percentage="54" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 600">
                                    <g fill="none" stroke-width="300">
                                    <circle stroke="white" cx="300" cy="300" r="150"  />
                                    </g>
                                </svg>
                                <svg class="pie-circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 600">
                                    <g fill="none" stroke-width="30">
                                    <circle stroke="white" cx="300" cy="300" r="260" />
                                    </g>
                                </svg>
                            </div>
                            <div class="infos-container">
                                <h4 data-percentage="54" class="cont">0</h4>
                                <h3>of event beneficiaries</h3>
                                <p>were associated with the </br><?php echo $titulo ?> Pillar activities.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-md-center align-items-center c-pt">
                    <div class="activity-item">
                        <img src="assets/images/pilar-icon-04@2x.png" alt="">
                    </div>
                    <div class="activity-item">
                        <img src="assets/images/pilar-icon-05@2x.png" alt="">
                    </div>
                    <div class="activity-item">
                        <img src="assets/images/pilar-icon-08@2x.png" alt="">
                    </div>
                    <div class="activity-item">
                        <img src="assets/images/pilar-icon-11@2x.png" alt="">
                    </div>
                    <div class="activity-item">
                        <img src="assets/images/pilar-icon-12@2x.png" alt="">
                    </div>
                    <div class="activity-item">
                        <img src="assets/images/pilar-icon-13@2x.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-50 bg-<?php echo $page_class ?>">
            <div class="bg bg-<?php echo $page_class ?>"></div>
            <div class="container">
                <div class="row info-numbers">
                    <div class="col-xl-9 row bg-light mx-auto p-0 inner">
                        <div class="content">
                            <i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 183.961 152.697"><path d="M-2827.1,152.7a17.916,17.916,0,0,1-17.9-17.9V30.1a17.916,17.916,0,0,1,17.9-17.895h23.414V5.519A5.569,5.569,0,0,1-2798.171,0a5.568,5.568,0,0,1,5.52,5.519v6.691h54.355V5.519A5.569,5.569,0,0,1-2732.777,0a5.568,5.568,0,0,1,5.52,5.519v6.691h23.248a17.881,17.881,0,0,1,17.895,17.727V134.8a17.916,17.916,0,0,1-17.895,17.9Zm-6.856-18.063a6.854,6.854,0,0,0,6.856,6.691h123.095a6.747,6.747,0,0,0,6.856-6.691h-.167V63.721H-2833.96Zm0-104.7V52.516h136.641V29.937a6.856,6.856,0,0,0-6.857-6.69h-23.248v6.69a5.568,5.568,0,0,1-5.519,5.52,5.568,5.568,0,0,1-5.519-5.52v-6.69h-54.356v6.69a5.568,5.568,0,0,1-5.519,5.52,5.568,5.568,0,0,1-5.52-5.52v-6.69H-2827.1A6.747,6.747,0,0,0-2833.96,29.937Zm58.87,93.492-18.063-19.234a5.721,5.721,0,0,1,.336-7.861,5.715,5.715,0,0,1,7.86.334l13.882,14.885,25.924-27.762a5.563,5.563,0,0,1,7.861-.335,5.418,5.418,0,0,1,.334,7.861l-30.1,32.112a5.339,5.339,0,0,1-4.014,1.84A5.344,5.344,0,0,1-2775.091,123.429Z" transform="translate(2869)"/></svg></i>
                            <ul class="items-numbers">
                                <li class="data-events" data-info="130">
                                    <h4>130</h4>
                                    <h5>Events</h5>
                                </li>
                                <li class="data-events-days" data-info="945">
                                    <h4>945</h4>
                                    <h5>Event days</h5>
                                </li>
                                <li class="data-beneficiaries" data-info="71984">
                                    <h4>71,984</h4>
                                    <h5>Beneficiaries</h5>
                                </li>
                            </ul>
                        </div>
                        <div class="content">
                            <i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 183.961 185.553"><g transform="translate(-650.3 -641.929)"><path d="M729.151,727.194a8.036,8.036,0,1,0,8.036,8.034A8.047,8.047,0,0,0,729.151,727.194Z"/><path d="M833.379,654.372l-90.921-12.433a1.022,1.022,0,0,0-.282,0l-91,12.924a1.02,1.02,0,0,0-.134,1.991l26.382,7.437v8.968a3.99,3.99,0,0,0-2.3,3.129,1.023,1.023,0,0,0-.045.3.828.828,0,0,0,.006.1c0,.038-.006.075-.006.1a.943.943,0,0,0,.019.193v14.707a1.02,1.02,0,0,0,1.02,1.02h.538v.2a1.019,1.019,0,0,0,1.019,1.019H678.9a.954.954,0,0,0,.162-.012.985.985,0,0,0,.173.014h1.224A1.019,1.019,0,0,0,681.474,693v-.2h.539a1.019,1.019,0,0,0,1.019-1.02v-15.1a.972.972,0,0,0-.042-.287,3.988,3.988,0,0,0-2.3-3.144v-8.045l12.466,3.516v19.207a57.429,57.429,0,0,0-16.092,39.514L661.239,772.3a1.02,1.02,0,0,0,.962,1.358h20.254V783.85h0a22.623,22.623,0,0,0,22.564,22.561h10.908v20.051a1.019,1.019,0,0,0,1.019,1.019h90.493a1.02,1.02,0,0,0,1.02-1.019V768.044a57.2,57.2,0,0,0,16.13-40.1A58.151,58.151,0,0,0,791.4,675.587V668.68c0-.08-.006-.159-.011-.238l42.128-12.08a1.019,1.019,0,0,0-.142-1.99ZM803.591,764.856l0,0-.536.538a1.025,1.025,0,0,0-.3.72v55.664H753.329V801.736a1.019,1.019,0,0,0-1.019-1.019h-15.6a16.9,16.9,0,0,1-16.852-16.811V768.97a1.02,1.02,0,0,0-1.02-1.02H700.525l13.88-39.357a1.033,1.033,0,0,0,.058-.339v-.317a52.209,52.209,0,1,1,89.128,36.919Zm-101.11-29.628a5.995,5.995,0,1,1-6-6A6.005,6.005,0,0,1,702.481,735.228Z"/></g></svg></i>
                            <ul class="items-numbers">
                                <li class="data-learning-events" data-info="80">
                                    <h4>82</h4>
                                    <h5>Learning events</h5>
                                </li>
                                <li class="data-learners" data-info="69240">
                                    <h4>69,240</h4>
                                    <h5>Learners</h5>
                                </li>
                                <li class="data-certificates" data-info="31770">
                                    <h4>31,770</h4>
                                    <h5>Certificates*</h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 row mx-auto">
                        <p class="text-obs col-md-6 ml-auto">*Certificates of completion and participation from learning events with objective assessment of learning requirements.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="highlights">
            <div class="heading-highlights">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1890 467.279"><path d="M-2087.806,567.782c-21.487,0-42.633-.9-62.85-2.68a619.771,619.771,0,0,1-61.545-8.474,554.254,554.254,0,0,1-60.087-14.928,519.659,519.659,0,0,1-58.482-22.043,514.745,514.745,0,0,1-56.728-29.815c-9.31-5.659-18.616-11.724-27.659-18.028-9.152-6.379-18.292-13.181-27.166-20.218-8.977-7.119-17.944-14.686-26.651-22.491-8.8-7.889-17.59-16.248-26.121-24.845-8.63-8.7-17.233-17.878-25.571-27.284-8.433-9.514-16.845-19.542-25-29.8-9.673-10.017-40.739-51.916-92.335-124.534V100.5c7.882,13.565,16.3,28.982,25.739,47.13,11.271,21.673,22.275,43.908,33.926,67.448l.005.011,0,.005c25.841,52.208,52.562,106.193,82.216,153.362,7.665,12.193,15.345,23.621,22.825,33.969,8.019,11.093,16.135,21.394,24.122,30.616a316.155,316.155,0,0,0,25.615,26.463,228.587,228.587,0,0,0,27.3,21.507c10.4,6.921,21.19,13.465,32.058,19.449,10.7,5.891,21.771,11.4,32.906,16.379,10.95,4.9,22.293,9.425,33.711,13.458,11.21,3.96,22.81,7.554,34.475,10.682,11.449,3.07,23.292,5.78,35.2,8.053,11.674,2.229,23.745,4.1,35.88,5.57,11.873,1.437,24.161,2.525,36.521,3.235,12.077.694,24.566,1.046,37.12,1.046,21.094,0,43.244-.995,65.836-2.956,21.529-1.869,44.177-4.68,67.316-8.353,21.873-3.473,44.947-7.84,68.582-12.98,22.1-4.806,45.529-10.47,69.637-16.835,22.454-5.928,45.508-12.444,70.479-19.92,22.26-6.664,45.519-13.937,71.108-22.233,47.661-15.452,96.208-32.145,143.156-48.288l.1-.035.452-.155.032-.011c46.978-16.154,95.555-32.858,143.066-48.266,25.573-8.293,48.8-15.558,71-22.209,24.934-7.468,47.946-13.976,70.351-19.9,24.066-6.359,47.446-12.017,69.49-16.815,23.577-5.132,46.595-9.493,68.414-12.963,23.076-3.669,45.66-6.476,67.126-8.343,22.519-1.958,44.6-2.951,65.625-2.951a617.534,617.534,0,0,1,68.233,3.673c11.254,1.257,22.458,2.861,33.3,4.766,11.05,1.943,22.057,4.258,32.714,6.879,10.841,2.666,21.64,5.73,32.1,9.105,10.636,3.435,21.216,7.287,31.446,11.452,10.4,4.234,20.753,8.916,30.763,13.915,10.153,5.069,20.263,10.619,30.05,16.494v77.951c-87.157-54-186.418-80.258-303.455-80.258-20.067,0-41.045.786-62.353,2.336-20.312,1.477-41.614,3.7-63.314,6.6-20.515,2.746-42.094,6.2-64.139,10.261-20.618,3.8-42.429,8.277-64.827,13.309-20.883,4.691-42.268,9.842-65.376,15.747-20.592,5.261-42.113,11.01-65.791,17.576-43.968,12.192-88.816,25.4-132.187,38.177l-.02.006-.069.02-.1.03-.036.011c-43.377,12.777-88.23,25.988-132.256,38.2-23.689,6.568-45.214,12.319-65.8,17.58-23.145,5.914-44.535,11.066-65.391,15.751-22.419,5.036-44.235,9.515-64.841,13.313-22.061,4.064-43.645,7.517-64.153,10.263-21.689,2.9-43,5.126-63.327,6.605-21.314,1.551-42.295,2.337-62.36,2.337h0Z" transform="translate(2638 -100.503)" opacity="0.5"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1890.001 532.961"><path d="M-2845,783.954V663.693c8.1-12.466,16.7-24.614,25.558-36.1,8.723-11.321,17.941-22.325,27.4-32.705,9.313-10.224,19.122-20.134,29.155-29.454,9.874-9.173,20.247-18.038,30.831-26.349,10.416-8.178,21.327-16.049,32.43-23.393,10.915-7.221,22.337-14.147,33.947-20.585,11.406-6.323,23.312-12.354,35.386-17.924,11.848-5.466,24.211-10.65,36.744-15.411,12.279-4.663,25.072-9.051,38.022-13.044,12.676-3.907,25.871-7.55,39.22-10.826,13.03-3.2,26.6-6.143,40.339-8.755,13.386-2.544,27.308-4.843,41.378-6.833,26.936-3.809,55.719-6.665,85.549-8.487,27.884-1.7,57.741-2.567,88.743-2.567,28.96,0,58.9.714,91.531,2.182,29.05,1.306,59.617,3.187,93.45,5.751,62.806,4.761,127.516,11.214,190.1,17.454l.032,0,.028,0,.031,0,.146.015.043,0c62.524,6.233,127.176,12.678,189.928,17.435,33.8,2.563,64.37,4.445,93.469,5.754,32.643,1.469,62.584,2.183,91.535,2.183,81.747,0,152.236-5.838,215.494-17.846,17.186-3.261,34.08-7.042,50.212-11.236,16.605-4.318,32.9-9.2,48.436-14.523,15.953-5.462,31.6-11.55,46.505-18.1,15.277-6.71,30.221-14.1,44.419-21.958,14.53-8.043,28.72-16.827,42.177-26.107a491.828,491.828,0,0,0,39.779-30.543,494.889,494.889,0,0,0,37.228-35.268c10.63-11.17,20.98-23.105,30.762-35.472v14.353c-9.195,9.944-18.791,19.613-28.523,28.74a564.1,564.1,0,0,1-43.608,36.92c-14.753,11.256-30.342,21.978-46.336,31.868-15.606,9.651-32.051,18.792-48.876,27.169-16.385,8.158-33.62,15.835-51.226,22.82-17.1,6.784-35.063,13.116-53.386,18.821-17.747,5.526-36.372,10.631-55.358,15.173-18.32,4.384-37.544,8.38-57.138,11.877-18.81,3.358-38.569,6.362-58.729,8.931-19.266,2.454-39.5,4.585-60.133,6.335-19.611,1.663-40.25,3.04-61.344,4.091-38.5,1.919-79.577,2.851-125.569,2.851-71.978,0-146.406-2.331-218.383-4.585h-.047c-71.957-2.254-146.364-4.585-218.381-4.585-41.947,0-79.624.772-115.182,2.36-19.389.866-38.37,2-56.416,3.355-18.97,1.428-37.622,3.165-55.437,5.163-18.576,2.084-36.85,4.521-54.313,7.243-18.139,2.829-35.986,6.056-53.043,9.592-17.655,3.661-35.025,7.769-51.629,12.211-17.133,4.584-33.978,9.664-50.068,15.1-143.778,48.57-250.7,132.686-326.874,257.156Z" transform="translate(2845.001 -250.992)" opacity="0.2"/></svg>
                <div class="container">
                    <div class="row">
                        <div class="col offset-lg-2 d-flex align-items-end">
                            <h2>Highlights</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container pt-xl-5 mt-5 c-pb">
                <div class="row flex-column align-items-center no-gutters pb-5">
                    <div class="col-xl-6 highlights-item">
                        <img src="assets/images/pilar-<?php echo $page_class ?>-icon-hl-01.svg" alt="">
                        <div class="content">
                            <p>Developed climate change related knowledge and skills of over <strong>30,000 stakeholders</strong> through the UNITAR managed <a href="https://unccelearn.org/" target="_blank">UN CC:e-Learn platform</a>, which has more <strong>than 230,000 registrations and 21 courses in 8 languages</strong>.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 highlights-item">
                        <img src="assets/images/pilar-<?php echo $page_class ?>-icon-hl-02.svg" alt="">
                        <div class="content">
                            <p>Helped to establish the <strong>EduCCate Global</strong> programme strengthening <strong>the climate literacy of thousands of primary and secondary teachers</strong> and providing them with the tools to bring climate change and sustainability into the classroom.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 highlights-item">
                        <img src="assets/images/pilar-<?php echo $page_class ?>-icon-hl-03.svg" alt="">
                        <div class="content">
                            <p>Supported the development / upgrading process of <strong>national climate change learning strategies</strong> in Kenya, the Kyrgyz Republic, Malawi Zambia and Zimbabwe.</p>
                        </div>
                    </div>
                    <div class="col-xl-7 highlights-item">
                        <img src="assets/images/pilar-<?php echo $page_class ?>-icon-hl-04.svg" alt="">
                        <div class="content">
                            <p>In partnership with the United Nations University initiated the transfer of its <strong>Sustainable Cycles Programme</strong>, which focuses on research and training in the area of <strong>e-waste and circularity</strong>, to UNITAR’s Division for Planet. This process is to be completed by end 2021.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 highlights-item">
                        <img src="assets/images/pilar-<?php echo $page_class ?>-icon-hl-05.svg" alt="">
                        <div class="content">
                            <p>Trained more than <strong>100 national stakeholders in Angola</strong> on <strong>Chemicals and Waste Management</strong> and the development of <strong>National Coordination Committees</strong> and sectorial coordination and consultation.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 highlights-item">
                        <img src="assets/images/pilar-<?php echo $page_class ?>-icon-hl-06.svg" alt="">
                        <div class="content">
                            <p>Undertook supporting visits to <strong>Sierra Leone</strong> and the <strong>Democratic Republic of Congo</strong> to finalize their <strong>National Action Plans for the artisanal and small-scale gold mining sector (ASGM)</strong>.</p>
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <p class="text-right"><a href="/download/unitar_results_report_2019.pdf#page=48" class="btn btn-<?php echo $page_class ?> btn-color btn-icon btn-right" target="_blank"><span>Read more</span> <i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 18"><path transform="translate(9.849 9.849)" d="M-.228.1l-7.407,7.66a1.267,1.267,0,0,1-1.834,0,1.374,1.374,0,0,1,0-1.9L-2.978-.848-9.469-7.56a1.374,1.374,0,0,1,0-1.9,1.267,1.267,0,0,1,1.834,0L-.228-1.8a1.374,1.374,0,0,1,0,1.9" /></svg></i></a></p>
                </div>
            </div>
        </section>
        <section id="testimonial-1" class="s-testimonial bg-<?php echo $page_class ?> bg-wave-top">
            <div class="detalhe-wave">
                <?php include('assets/images/detalhe-wave-3.svg'); ?>
            </div>
            <div class="bg-<?php echo $page_class ?> bg-wave"></div>
            <div class="container position-relative text-white mt-n5 c-pb">
                <div class="row align-items-center">
                    <div class="col-10 offset-1 col-md-5 offset-md-0 offset-xl-1">
                        <div class="image">
                            <img src="assets/images/hero-pilar-<?php echo $page_class ?>-img-01.jpg" alt="AGRHYMET Regional Centre (CRA) - Niger"> 
                        </div>
                        <div class="image-desc bg-<?php echo $page_class ?>">
                            <h3>AGRHYMET Regional Centre (CRA)</h3>
                            <p>Focal points: Prof. Sanoussi Atta and Elise Kaba</p>
                            <p>Niger</p>
                        </div>
                    </div>
                    <div class="col-10 col-md-7 col-xl-6 offset-1 offset-md-0 text-desc font-size-3">
                        <p>“During the workshop, we learned the principles and methods for creating online courses and we had the chance to experiment, applying the different steps in the process of developing an effective e-learning pilot product.”</p>
                        <p class="text-right"><a href="/download/unitar_results_report_2019.pdf#page=53" class="btn btn-light btn-icon btn-right" target="_blank"><span>Read more</span> <i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 18"><path transform="translate(9.849 9.849)" d="M-.228.1l-7.407,7.66a1.267,1.267,0,0,1-1.834,0,1.374,1.374,0,0,1,0-1.9L-2.978-.848-9.469-7.56a1.374,1.374,0,0,1,0-1.9,1.267,1.267,0,0,1,1.834,0L-.228-1.8a1.374,1.374,0,0,1,0,1.9" /></svg></i></a></p>
                    </div>
                </div>
            </div>
        </section>
        <section id="testimonial-2" class="s-testimonial bg-light bg-wave-top">
            <div class="detalhe-wave">
                <?php include('assets/images/detalhe-wave-4.svg'); ?>
            </div>
            <div class="bg-light bg-wave"></div>
            <div class="container position-relative c-pb">
                <div class="row align-items-center">
                    <div class="col-10 offset-1 col-md-5 offset-1 offset-md-0 order-md-2">
                        <div class="image">
                            <img src="assets/images/hero-pilar-<?php echo $page_class ?>-img-02.jpg" alt="Sit Nour Hassan - Sudan"> 
                        </div>
                        <div class="image-desc bg-light">
                            <h3>Sit Nour Hassan</h3>
                            <p>Sudan</p>
                        </div>
                    </div>
                    <div class="col-10 col-md-7 col-xl-6 offset-md-0 text-desc font-size-3">
                        <p>“Together we organized a Training of Trainer (ToT) workshop to better prepare those involved in the data collection and we established 4 national steering groups with institutions, non-governmental organizations and every stakeholder and mercury user in the country to get them on board with our project.”</p>
                        <p class="text-right"><a href="/download/unitar_results_report_2019.pdf#page=57" class="btn btn-color btn-<?php echo $page_class ?> btn-icon btn-right" target="_blank"><span>Read more</span> <i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 18"><path transform="translate(9.849 9.849)" d="M-.228.1l-7.407,7.66a1.267,1.267,0,0,1-1.834,0,1.374,1.374,0,0,1,0-1.9L-2.978-.848-9.469-7.56a1.374,1.374,0,0,1,0-1.9,1.267,1.267,0,0,1,1.834,0L-.228-1.8a1.374,1.374,0,0,1,0,1.9" /></svg></i></a></p>
                    </div>
                </div>
            </div>
        </section>

<?php include('footer.php'); ?>
<?php include('inc/scripts-pilar.html'); ?>