<?php
include('header.php');
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
?>
<body>

    <?php include('navhead.php'); ?>

    <div class="container">
        <div class="row-fluid">
            <div class="span3">
                <div class="hero-unit-3">
                    <div class="alert-index alert-success">
                        <i class="icon-calendar icon-large"></i>
                        <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                    </div>
                </div>
                <div class="hero-unit-1">
                    <ul class="nav  nav-pills nav-stacked">


                        <li class="nav-header">Links</li>
                        <li><a href="index.php"><i class="icon-home icon-large"></i>&nbsp;Home</a></li>

                        <li><a href="sitemap.php"><i class="icon-sitemap icon-large"></i>&nbsp;Site Map</a></li>
                        <li><a href="#"><i class="icon-envelope-alt icon-large"></i>&nbsp;Contact Us</a></li>
                        <li class="nav-header">About US</li>
                        <li><a href="#mission" role="button" data-toggle="modal"><i class="icon-book icon-large"></i>&nbsp;Mission</a></li>
                        <li><a href="#vision" role="button" data-toggle="modal"><i class="icon-book icon-large"></i>&nbsp;Vision</a></li>
                        <li  class="active"><a href="history.php"><i class="icon-list-alt icon-large"></i>&nbsp;History</a></li>

                    </ul>
                </div>

            </div>

            <div class="span9">


                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>University of Nairobi History</strong>
                </div>


                <p>
                <div class="hero-unit-2">

                The University of Nairobi owes its origin to several developments in higher education within the country and the region. The idea of an institution for higher learning in Kenya goes back to 1947 when the Kenya Government drew up a plan for the establishment of a technical and commercial institute in Nairobi.

By 1949, this plan had grown into an East African concept aimed at providing higher technical education for the region.

In September 1951, a Royal Charter was issued to the Royal Technical College of East Africa and the foundation stone of the college was laid in April 1952.

During the same period, the Asian Community of East Africa was also planning to build a College for Arts, Science and Commerce as a living memorial to Mahatma Gandhi. To avoid duplication of efforts, Gandhi Memorial Academy Society agreed to merge interests with those of the East African Governments. Thus, the Gandhi Memorial Academy was incorporated into the Royal Technical College of East Africa in April 1954, and the college proceeded to open its doors to the first intake of students in April 1956.

Soon after the arrival of students at the college, the pattern of higher education in East Africa came under scrutiny. Through the recommendation of a working party formed in 1958, chaired by the Vice-Chancellor of the University of London, Sir John Lockwood, the Royal Technical College of East Africa was transformed. On June 25, 1961, the College became the second University College in East Africa, under the name Royal College Nairobi.

The Royal College Nairobi was renamed University College, Nairobi on May 20, 1964. On the attainment of "University College" status, the institution prepared students for bachelor's degrees awarded by the University of London, while also continuing to offer college diploma programmes. The University College Nairobi provided educational opportunities in this capacity until 1966 when it began preparing students exclusively for degrees of the University of East Africa, with the exception of the Department of Domestic Science.

With effect from July 1, 1970, the University of East Africa was dissolved and the three East African countries set up their national Universities. This development saw the birth of the University of Nairobi set up by an Act of Parliament.

Since 1970, the University of Nairobi has seen many innovations, which have contributed to its development and that of the nation. It has grown from a faculty based university serving a student population of 2,768 to a college focused university serving over 84,000, currently.
                </div>
                </p>


            </div>

        </div>
        <?php include('footer.php'); ?>
    </div>
</div>
</div>






</body>
</html>


