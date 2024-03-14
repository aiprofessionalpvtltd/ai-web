@extends('layouts.frontend.main')

@section('content')

    <!--Page Title-->
    <section class="page-title">
        <div class="pattern-layer-one" style="background-image: url({{asset('assets/frontend/images/background/pattern-16.png')}})"></div>
        <div class="auto-container">
            <h2>Projects</h2>
            <ul class="page-breadcrumb">
                <li><a href="/">home</a></li>
                <li>Projects</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">

                <h2>
                    Our Recent Projects
                </h2>
            </div>

            <div class="wrap">
                <div class="container">


                    <div class="filters clearfix">
                        <ul class="filter-tabs filter-btns text-center clearfix">
                            <li class="filter  active filter-btn" data-role="button" data-filter=".web">Web Application Projects</li>
                            <li class="filter  filter-btn" data-role="button" data-filter=".design">Mobile Application Projects</li>
                            <li class="filter  filter-btn" data-role="button" data-filter=".development">Robotics /IOT/ Embedded Systems</li>
                        </ul>
                    </div>





                            <div class="courses row" id="mix-wrapper">
                                <div class="mix-target web ideas technology col-lg-4 col-md-6 col-sm-12">
                                    <div class="card-proj">
                                        <div
                                            style="
                      position: absolute;
                      background: #8b0304;
                      text-align: center;
                      color: #fff;
                      padding: 5px;
                      width: 100%;
                      top: 0;
                      left: 0;
                      height: 47px;
                      color: #fff;
                      font-weight: bold;
                    "
                                        >
                                            <p style="margin-bottom: 0; line-height: 36px">Digital Parliament & Office Automation Solution</p>
                                        </div>
                                        <p style="margin-top: 46px">
                                            Scope of this software project includes study, design, implementation and training. Major modules of this project include E-Filing, Legislation, Visitor management, HRM, Finance & Accounting, Transport, Debates management, Translation, Inter-parliamentary relation management, Administration management, House Acquisition and Library Management.
                                        </p>
                                        <div
                                            style="
                      position: absolute;
                      background: #ddd;
                      text-align: center;
                      color: #fff;
                      padding: 5px;
                      width: 100%;
                      bottom: 0;
                      left: 0;
                      height: 50px;
                      color: #666;
                      font-weight: bold;
                    "
                                        >
                                            <p style="margin-bottom: 0; line-height: 42px">Client: Senate of Pakistan</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Case Block -->
                                <div class="mix-target web ideas technology col-lg-4 col-md-6 col-sm-12">
                                    <div class="card-proj web">
                                        <div
                                            style="
                      position: absolute;
                      background: #8b0304;
                      text-align: center;
                      color: #fff;
                      padding: 5px;
                      width: 100%;
                      top: 0;
                      left: 0;
                      height: 47px;
                      color: #fff;
                      font-weight: bold;
                    "
                                        >
                                            <p style="margin-bottom: 0; line-height: 36px">Recruitment & Examination System</p>
                                        </div>
                                        <p style="margin-top: 46px">
                                            This is a complete solution which will cover all the features of the FPSC recruitment process
                                            including job advertisement, application submission, exam & interview scheduling, exam hall
                                            allocations, province based quota allocation, conduct exam and interviews.
                                        </p>
                                        <div
                                            style="
                      position: absolute;
                      background: #ddd;
                      text-align: center;
                      color: #fff;
                      padding: 5px;
                      width: 100%;
                      bottom: 0;
                      left: 0;
                      height: 50px;
                      color: #666;
                      font-weight: bold;
                    "
                                        >
                                            <p style="margin-bottom: 0; line-height: 42px">Client: Federal Public Services Commission (FPSC)</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Case Block -->
                                <div class="mix-target web ideas technology col-lg-4 col-md-6 col-sm-12">
                                    <div class="card-proj web">
                                        <div
                                            style="
                      position: absolute;
                      background: #8b0304;
                      text-align: center;
                      color: #fff;
                      padding: 5px;
                      width: 100%;
                      top: 0;
                      left: 0;
                      height: 47px;
                      color: #fff;
                      font-weight: bold;
                    "
                                        >
                                            <p style="margin-bottom: 0; line-height: 19px">
                                                POL (Petroleum, Oils & Lubricants) & Transmission Sites Management System
                                            </p>
                                        </div>
                                        <p style="margin-top: 46px">
                                            This system is developed for the Special Communication Organization (SCO). Objective of the system
                                            is to track & manage POL across different transmission sites. Furthermore, the system also manages
                                            inventory of equipment and vehicles, power outages on transmission sites and provides reporting
                                            dashboards for executives.
                                        </p>
                                        <div
                                            style="
                      position: absolute;
                      background: #ddd;
                      text-align: center;
                      color: #fff;
                      padding: 5px;
                      width: 100%;
                      bottom: 0;
                      left: 0;
                      height: 50px;
                      color: #666;
                      font-weight: bold;
                    "
                                        >
                                            <p style="margin-bottom: 0; line-height: 42px">Client: Special Communication Organization (SCO)</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Case Block -->
                                <div class="mix-target web ideas technology col-lg-4 col-md-6 col-sm-12">
                                    <div class="card-proj web">
                                        <div
                                            style="
                      position: absolute;
                      background: #8b0304;
                      text-align: center;
                      color: #fff;
                      padding: 5px;
                      width: 100%;
                      top: 0;
                      left: 0;
                      height: 47px;
                      color: #fff;
                      font-weight: bold;
                    "
                                        >
                                            <p style="margin-bottom: 0; line-height: 36px">Courier & Shipping Portal</p>
                                        </div>
                                        <p style="margin-top: 46px">
                                            An operational automation portal is designed and developed to streamline operations, enhance
                                            efficiency, and provide real-time visibility into the entire shipping and courier process. Key
                                            features and functionalities include order management, shipment tracking, route optimization, label
                                            printing, carriers integration and order history.
                                        </p>
                                        <div
                                            style="
                      position: absolute;
                      background: #ddd;
                      text-align: center;
                      color: #fff;
                      padding: 5px;
                      width: 100%;
                      bottom: 0;
                      left: 0;
                      height: 50px;
                      color: #666;
                      font-weight: bold;
                    "
                                        >
                                            <p style="margin-bottom: 0; line-height: 42px">Client: Impeccable Courier Australia</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Case Block -->
                                <div class="mix-target web ideas technology col-lg-4 col-md-6 col-sm-12">
                                    <div class="card-proj web">
                                        <div
                                            style="
                      position: absolute;
                      background: #8b0304;
                      text-align: center;
                      color: #fff;
                      padding: 5px;
                      width: 100%;
                      top: 0;
                      left: 0;
                      height: 47px;
                      color: #fff;
                      font-weight: bold;
                    "
                                        >
                                            <p style="margin-bottom: 0; line-height: 36px">Sarokh Delivery and Tracking Project</p>
                                        </div>
                                        <p style="margin-top: 46px">
                                            Web and mobile applications of Sarokh Group Saudi Arabia for shipment deliveries and tracking. A
                                            complete system including mobile applications for customers, agents were developed to ship and
                                            deliver shipments. Main features include order management, customers management, agents management,
                                            shipment tracking, invoicing and order history.
                                        </p>
                                        <div
                                            style="
                      position: absolute;
                      background: #ddd;
                      text-align: center;
                      color: #fff;
                      padding: 5px;
                      width: 100%;
                      bottom: 0;
                      left: 0;
                      height: 50px;
                      color: #666;
                      font-weight: bold;
                    "
                                        >
                                            <p style="margin-bottom: 0; line-height: 42px">Client: Sarokh Group, Saudi Arabia</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Case Block -->
                                <div class="mix-target web ideas technology col-lg-4 col-md-6 col-sm-12">
                                    <div class="card-proj web">
                                        <div
                                            style="
                      position: absolute;
                      background: #8b0304;
                      text-align: center;
                      color: #fff;
                      padding: 5px;
                      width: 100%;
                      top: 0;
                      left: 0;
                      height: 47px;
                      color: #fff;
                      font-weight: bold;
                    "
                                        >
                                            <p style="margin-bottom: 0; line-height: 36px">Allotment and Balloting System</p>
                                        </div>
                                        <p style="margin-top: 46px">
                                            This system was developed for a government organization to maintain the data of housing schemes,
                                            memberships, balloting and manage installment plans.
                                        </p>
                                        <div
                                            style="
                      position: absolute;
                      background: #ddd;
                      text-align: center;
                      color: #fff;
                      padding: 5px;
                      width: 100%;
                      bottom: 0;
                      left: 0;
                      height: 50px;
                      color: #666;
                      font-weight: bold;
                    "
                                        >
                                            <p style="margin-bottom: 0; line-height: 42px">Client: Pakistan Army</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Case Block -->
                                <div class="mix-target web ideas technology col-lg-4 col-md-6 col-sm-12">
                                    <div class="card-proj web">
                                        <div
                                            style="
                      position: absolute;
                      background: #8b0304;
                      text-align: center;
                      color: #fff;
                      padding: 5px;
                      width: 100%;
                      top: 0;
                      left: 0;
                      height: 47px;
                      color: #fff;
                      font-weight: bold;
                    "
                                        >
                                            <p style="margin-bottom: 0; line-height: 36px">Health Claims Middleware</p>
                                        </div>
                                        <p style="margin-top: 46px">
                                            A middleware application which integrates companies to QWM (UK) portal for health claims submission.
                                        </p>
                                        <div
                                            style="
                      position: absolute;
                      background: #ddd;
                      text-align: center;
                      color: #fff;
                      padding: 5px;
                      width: 100%;
                      bottom: 0;
                      left: 0;
                      height: 50px;
                      color: #666;
                      font-weight: bold;
                    "
                                        >
                                            <p style="margin-bottom: 0; line-height: 42px">Client: QWM UK</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Case Block -->
                                <div class="mix-target web ideas technology col-lg-4 col-md-6 col-sm-12">
                                    <div class="card-proj web">
                                        <div
                                            style="
                      position: absolute;
                      background: #8b0304;
                      text-align: center;
                      color: #fff;
                      padding: 5px;
                      width: 100%;
                      top: 0;
                      left: 0;
                      height: 47px;
                      color: #fff;
                      font-weight: bold;
                    "
                                        >
                                            <p style="margin-bottom: 0; line-height: 36px">
                                                Record Digitization and Archiving using OCR (Senate of Pakistan)
                                            </p>
                                        </div>
                                        <p style="margin-top: 46px">
                                            A complete system was developed to perform the digitization of records (50 year old documents) using
                                            OCR and then store the data in a digital library system.
                                        </p>
                                        <div
                                            style="
                      position: absolute;
                      background: #ddd;
                      text-align: center;
                      color: #fff;
                      padding: 5px;
                      width: 100%;
                      bottom: 0;
                      left: 0;
                      height: 50px;
                      color: #666;
                      font-weight: bold;
                    "
                                        >
                                            <p style="margin-bottom: 0; line-height: 42px">Client: Senate of Pakistan</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Case Block -->
                                <div class="mix-target design ideas technology col-lg-4 col-md-6 col-sm-12">
                                    <div class="card-proj web">
                                        <div
                                            style="
                      position: absolute;
                      background: #8b0304;
                      text-align: center;
                      color: #fff;
                      padding: 5px;
                      width: 100%;
                      top: 0;
                      left: 0;
                      height: 47px;
                      color: #fff;
                      font-weight: bold;
                    "
                                        >
                                            <p style="margin-bottom: 0; line-height: 36px">Sarokh Delivery and Tracking Project</p>
                                        </div>
                                        <p style="margin-top: 46px">
                                            Web and mobile applications of Sarokh Group Saudi Arabia for shipment deliveries and tracking. A
                                            complete system including mobile applications for customers, agents were developed to ship and
                                            deliver shipments. Main features include order management, customers management, agents management,
                                            shipment tracking, invoicing and order history.
                                        </p>
                                        <div
                                            style="
                      position: absolute;
                      background: #ddd;
                      text-align: center;
                      color: #fff;
                      padding: 5px;
                      width: 100%;
                      bottom: 0;
                      left: 0;
                      height: 50px;
                      color: #666;
                      font-weight: bold;
                    "
                                        >
                                            <p style="margin-bottom: 0; line-height: 42px">Client: Sarokh Group, Saudi Arabia</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Case Block -->
                                <div class="mix-target design ideas technology col-lg-4 col-md-6 col-sm-12">
                                    <div class="card-proj web">
                                        <div
                                            style="
                      position: absolute;
                      background: #8b0304;
                      text-align: center;
                      color: #fff;
                      padding: 5px;
                      width: 100%;
                      top: 0;
                      left: 0;
                      height: 47px;
                      color: #fff;
                      font-weight: bold;
                    "
                                        >
                                            <p style="margin-bottom: 0; line-height: 36px">SCO Official Mobile Application</p>
                                        </div>
                                        <p style="margin-top: 46px">
                                            An official mobile application (Android & iOS) is developed for the customers of SCO telecom
                                            services. It includes customer service, packages, subscription, and online payment.
                                        </p>
                                        <div
                                            style="
                      position: absolute;
                      background: #ddd;
                      text-align: center;
                      color: #fff;
                      padding: 5px;
                      width: 100%;
                      bottom: 0;
                      left: 0;
                      height: 50px;
                      color: #666;
                      font-weight: bold;
                    "
                                        >
                                            <p style="margin-bottom: 0; line-height: 42px">Client: Special Communication Organization (SCO)</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Case Block -->
                                <div class="mix-target design ideas technology col-lg-4 col-md-6 col-sm-12">
                                    <div class="card-proj web">
                                        <div
                                            style="
                      position: absolute;
                      background: #8b0304;
                      text-align: center;
                      color: #fff;
                      padding: 5px;
                      width: 100%;
                      top: 0;
                      left: 0;
                      height: 47px;
                      color: #fff;
                      font-weight: bold;
                    "
                                        >
                                            <p style="margin-bottom: 0; line-height: 36px">Senator’s Communication Mobile Application</p>
                                        </div>
                                        <p style="margin-top: 46px">
                                            Mobile applications (Android & iOS) are developed for the members of the Senate (Senators). Main
                                            features of the project were draft and track legislative business of senators, senators leave
                                            management, online speech request in house, committees information, Chat/Messaging and availability
                                            of senate resources (Bills, motions, resolutions, press releases etc.)
                                        </p>
                                        <div
                                            style="
                      position: absolute;
                      background: #ddd;
                      text-align: center;
                      color: #fff;
                      padding: 5px;
                      width: 100%;
                      bottom: 0;
                      left: 0;
                      height: 50px;
                      color: #666;
                      font-weight: bold;
                    "
                                        >
                                            <p style="margin-bottom: 0; line-height: 42px">Client: Senate of Pakistan</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Case Block -->
                                <div class="mix-target development ideas technology col-lg-4 col-md-6 col-sm-12">
                                    <div class="card-proj web">
                                        <div
                                            style="
                      position: absolute;
                      background: #8b0304;
                      text-align: center;
                      color: #fff;
                      padding: 5px;
                      width: 100%;
                      top: 0;
                      left: 0;
                      height: 47px;
                      color: #fff;
                      font-weight: bold;
                    "
                                        >
                                            <p style="margin-bottom: 0; line-height: 36px">Weighing Scale Automation</p>
                                        </div>
                                        <p style="margin-top: 46px">
                                            This project was developed for a packing factory to automate the weighing process and integrate the
                                            hardware (Weighing scale and barcode scanners) with their current SAP ERP.
                                        </p>
                                        <div
                                            style="
                      position: absolute;
                      background: #ddd;
                      text-align: center;
                      color: #fff;
                      padding: 5px;
                      width: 100%;
                      bottom: 0;
                      left: 0;
                      height: 50px;
                      color: #666;
                      font-weight: bold;
                    "
                                        >
                                            <p style="margin-bottom: 0; line-height: 42px">Client: Creative Business Solutions, Karachi</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Case Block -->
                                <div class="mix-target development ideas technology col-lg-4 col-md-6 col-sm-12">
                                    <div class="card-proj web">
                                        <div
                                            style="
                      position: absolute;
                      background: #8b0304;
                      text-align: center;
                      color: #fff;
                      padding: 5px;
                      width: 100%;
                      top: 0;
                      left: 0;
                      height: 47px;
                      color: #fff;
                      font-weight: bold;
                    "
                                        >
                                            <p style="margin-bottom: 0; line-height: 36px">Air Purification Robot</p>
                                        </div>
                                        <p style="margin-top: 46px">
                                            This robotic system was developed for Get Technologies Pakistan. Main objective of the project is to
                                            develop a line following robot which will purify the air using ultraviolet light.
                                        </p>
                                        <div
                                            style="
                      position: absolute;
                      background: #ddd;
                      text-align: center;
                      color: #fff;
                      padding: 5px;
                      width: 100%;
                      bottom: 0;
                      left: 0;
                      height: 50px;
                      color: #666;
                      font-weight: bold;
                    "
                                        >
                                            <p style="margin-bottom: 0; line-height: 42px">Client: IEI Pakistan</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Case Block -->
                                <div class="mix-target development ideas technology col-lg-4 col-md-6 col-sm-12">
                                    <div class="card-proj web">
                                        <div
                                            style="
                      position: absolute;
                      background: #8b0304;
                      text-align: center;
                      color: #fff;
                      padding: 5px;
                      width: 100%;
                      top: 0;
                      left: 0;
                      height: 47px;
                      color: #fff;
                      font-weight: bold;
                    "
                                        >
                                            <p style="margin-bottom: 0; line-height: 36px">Drones for light show</p>
                                        </div>
                                        <p style="margin-top: 46px">
                                            A combination of hardware (Drones) and control software has been designed and developed to perform
                                            drones light shows. Initially 100 drones are under development.
                                        </p>
                                        <div
                                            style="
                      position: absolute;
                      background: #ddd;
                      text-align: center;
                      color: #fff;
                      padding: 5px;
                      width: 100%;
                      bottom: 0;
                      left: 0;
                      height: 50px;
                      color: #666;
                      font-weight: bold;
                    "
                                        >
                                            <p style="margin-bottom: 0; line-height: 42px">Client: ZAF Group, Islambad</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Case Block -->
                                <div class="mix-target development ideas technology col-lg-4 col-md-6 col-sm-12">
                                    <div class="card-proj web">
                                        <div
                                            style="
                      position: absolute;
                      background: #8b0304;
                      text-align: center;
                      color: #fff;
                      padding: 5px;
                      width: 100%;
                      top: 0;
                      left: 0;
                      height: 47px;
                      color: #fff;
                      font-weight: bold;
                    "
                                        >
                                            <p style="margin-bottom: 0; line-height: 36px">
                                                Conversion of traditional vehicle into Electric vehicle
                                            </p>
                                        </div>
                                        <p style="margin-top: 46px">
                                            This was a POC (Proof of Concept) aimed to convert traditional vehicles into Electric Vehicles (EV)
                                            in collaboration with NIE (National Institute of Electronics).
                                        </p>
                                        <div
                                            style="
                      position: absolute;
                      background: #ddd;
                      text-align: center;
                      color: #fff;
                      padding: 5px;
                      width: 100%;
                      bottom: 0;
                      left: 0;
                      height: 50px;
                      color: #666;
                      font-weight: bold;
                    "
                                        >
                                            <p style="margin-bottom: 0; line-height: 42px">Client: National Institute of Electronics (NIE)</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Case Block -->
                                <div class="mix-target development ideas technology col-lg-4 col-md-6 col-sm-12">
                                    <div class="card-proj web">
                                        <div
                                            style="
                      position: absolute;
                      background: #8b0304;
                      text-align: center;
                      color: #fff;
                      padding: 5px;
                      width: 100%;
                      top: 0;
                      left: 0;
                      height: 47px;
                      color: #fff;
                      font-weight: bold;
                    "
                                        >
                                            <p style="margin-bottom: 0; line-height: 36px">NAS (Network Attached Storage)</p>
                                        </div>
                                        <p style="margin-top: 46px">
                                            A Raspberry Pi based NAS, developed with centralized and decentralized cloud storages and syncing
                                            features.
                                        </p>
                                        <div
                                            style="
                      position: absolute;
                      background: #ddd;
                      text-align: center;
                      color: #fff;
                      padding: 5px;
                      width: 100%;
                      bottom: 0;
                      left: 0;
                      height: 50px;
                      color: #666;
                      font-weight: bold;
                    "
                                        >
                                            <p style="margin-bottom: 0; line-height: 42px">Client: Lexa Limited, Malta</p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                </div><!-- end of container -->
            </div><!-- end of wrap -->


        </div>
    </section>

@endsection
