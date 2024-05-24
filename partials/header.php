<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Estate 360 |  </title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/dashboard.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/create-property-modal.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/raise-questions.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/slimselect.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/select.min.css" type="text/css" />
    <link rel="stylesheet" href="../assets/css/property.css" type="text/css" />
</head>

<body>
    <div class="d-flex justify-content-between">
        <div class="sidebar-main d-flex flex-column align-items-start">
            <div class="sidebar-logo full-width text-center">
                <img src="../assets/images/login-logo.svg" class="img-fluid" alt="login"/>
                <span>Estate360</span>
            </div>
            <div class="menuleft sidebar-menu d-flex flex-column">
                <label>Menu</label>
                <ul>
                    <li>
                        <a href="dashboard.php" class="active">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.5 3.75H4.5C3.90402 3.75247 3.33316 3.99031 2.91174 4.41174C2.49031 4.83316 2.25247 5.40402 2.25 6V16.5C2.25247 17.096 2.49031 17.6668 2.91174 18.0883C3.33316 18.5097 3.90402 18.7475 4.5 18.75H11.25V20.25H9C8.80109 20.25 8.61032 20.329 8.46967 20.4697C8.32902 20.6103 8.25 20.8011 8.25 21C8.25 21.1989 8.32902 21.3897 8.46967 21.5303C8.61032 21.671 8.80109 21.75 9 21.75H15C15.1989 21.75 15.3897 21.671 15.5303 21.5303C15.671 21.3897 15.75 21.1989 15.75 21C15.75 20.8011 15.671 20.6103 15.5303 20.4697C15.3897 20.329 15.1989 20.25 15 20.25H12.75V18.75H19.5C20.096 18.7475 20.6668 18.5097 21.0883 18.0883C21.5097 17.6668 21.7475 17.096 21.75 16.5V6C21.7475 5.40402 21.5097 4.83316 21.0883 4.41174C20.6668 3.99031 20.096 3.75247 19.5 3.75ZM19.5 17.25H4.5C4.30109 17.25 4.11032 17.171 3.96967 17.0303C3.82902 16.8897 3.75 16.6989 3.75 16.5V15H20.25V16.5C20.25 16.6989 20.171 16.8897 20.0303 17.0303C19.8897 17.171 19.6989 17.25 19.5 17.25Z" fill="#"/>
                            </svg>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="property.php">
                            <svg width="31" height="32" viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M26 25.2727H25.304V11.852H26V10.6247H21.2983V13.0655H23.2473V14.2927H21.2983V15.5201H23.2473V16.7474H21.2983V17.9747H23.2473V19.2019H21.2983V20.4294H23.2473V21.6566H21.2983V25.2729H20.1088V8.30797L15.5 5.5L10.8912 8.30797V25.2727H9.70174V21.6565H7.76631V20.4294H9.70174V19.2019H7.76631V17.9747H9.70174V16.7473H7.76631V15.5201H9.70174V14.2927H7.76631V13.0655H9.70174V10.6247H5V11.852H5.7096V25.2727H5V26.5H26V25.2727ZM17.2183 10.4475H18.4456V11.6748H17.2183V10.4475ZM17.2183 13.0246H18.4456V14.2519H17.2183V13.0246ZM17.2183 15.6019H18.4456V16.8291H17.2183V15.6019ZM17.2183 18.179H18.4456V19.4062H17.2183V18.179ZM17.2183 20.7561H18.4456V21.9833H17.2183V20.7561ZM14.8864 10.4475H16.1136V11.6748H14.8864V10.4475ZM14.8864 13.0246H16.1136V14.2519H14.8864V13.0246ZM14.8864 15.6019H16.1136V16.8291H14.8864V15.6019ZM14.8864 18.179H16.1136V19.4062H14.8864V18.179ZM14.8864 20.7561H16.1136V21.9833H14.8864V20.7561ZM12.5137 10.4475H13.7411V11.6748H12.5137V10.4475ZM12.5137 13.0246H13.7411V14.2519H12.5137V13.0246ZM12.5137 15.6019H13.7411V16.8291H12.5137V15.6019ZM12.5137 18.179H13.7411V19.4062H12.5137V18.179ZM12.5137 20.7561H13.7411V21.9833H12.5137V20.7561ZM14.8864 23.0879H16.1136V25.2727H14.8864V23.0879Z" fill="#"/>
                            </svg>
                            <span>Property</span>
                        </a>
                    </li>
                    <li>
                        <a href="quotations-list.php">
                            <svg width="24" height="30" viewBox="0 0 24 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.9937 11.0036H17.9884C18.2534 11.0036 18.5075 10.8983 18.6948 10.7109C18.8822 10.5236 18.9875 10.2694 18.9875 10.0045C18.9875 9.73949 18.8822 9.48536 18.6948 9.298C18.5075 9.11063 18.2534 9.00536 17.9884 9.00536H11.9937C11.7288 9.00536 11.4746 9.11063 11.2873 9.298C11.0999 9.48536 10.9946 9.73949 10.9946 10.0045C10.9946 10.2694 11.0999 10.5236 11.2873 10.7109C11.4746 10.8983 11.7288 11.0036 11.9937 11.0036ZM9.99553 15H17.9884C18.2534 15 18.5075 14.8947 18.6948 14.7074C18.8822 14.52 18.9875 14.2659 18.9875 14.0009C18.9875 13.7359 18.8822 13.4818 18.6948 13.2944C18.5075 13.107 18.2534 13.0018 17.9884 13.0018H9.99553C9.73055 13.0018 9.47642 13.107 9.28905 13.2944C9.10169 13.4818 8.99642 13.7359 8.99642 14.0009C8.99642 14.2659 9.10169 14.52 9.28905 14.7074C9.47642 14.8947 9.73055 15 9.99553 15ZM9.99553 18.9964H17.9884C18.2534 18.9964 18.5075 18.8912 18.6948 18.7038C18.8822 18.5164 18.9875 18.2623 18.9875 17.9973C18.9875 17.7323 18.8822 17.4782 18.6948 17.2908C18.5075 17.1035 18.2534 16.9982 17.9884 16.9982H9.99553C9.73055 16.9982 9.47642 17.1035 9.28905 17.2908C9.10169 17.4782 8.99642 17.7323 8.99642 17.9973C8.99642 18.2623 9.10169 18.5164 9.28905 18.7038C9.47642 18.8912 9.73055 18.9964 9.99553 18.9964ZM21.9848 5.00894H5.99911C5.73413 5.00894 5.48 5.1142 5.29263 5.30157C5.10526 5.48894 5 5.74307 5 6.00805V23.9919C5 24.1775 5.05167 24.3594 5.14922 24.5172C5.24676 24.675 5.38633 24.8026 5.55229 24.8856C5.71825 24.9686 5.90403 25.0037 6.08883 24.987C6.27363 24.9704 6.45013 24.9026 6.59857 24.7912L8.66672 23.2426L10.7249 24.7912C10.8978 24.9209 11.1082 24.9911 11.3243 24.9911C11.5405 24.9911 11.7509 24.9209 11.9238 24.7912L13.992 23.2426L16.0601 24.7912C16.233 24.9209 16.4434 24.9911 16.6596 24.9911C16.8757 24.9911 17.0861 24.9209 17.259 24.7912L19.3172 23.2426L21.3853 24.7912C21.5345 24.9024 21.7117 24.9697 21.8971 24.9856C22.0824 25.0015 22.2685 24.9653 22.4344 24.8812C22.5992 24.7981 22.7377 24.6711 22.8347 24.5141C22.9317 24.3572 22.9833 24.1765 22.9839 23.9919V6.00805C22.9839 5.74307 22.8786 5.48894 22.6913 5.30157C22.5039 5.1142 22.2498 5.00894 21.9848 5.00894ZM20.9857 21.9937L19.9166 21.1945C19.7437 21.0647 19.5334 20.9946 19.3172 20.9946C19.101 20.9946 18.8907 21.0647 18.7177 21.1945L16.6596 22.7431L14.5914 21.1945C14.4185 21.0647 14.2081 20.9946 13.992 20.9946C13.7758 20.9946 13.5654 21.0647 13.3925 21.1945L11.3243 22.7431L9.26618 21.1945C9.09324 21.0647 8.88289 20.9946 8.66672 20.9946C8.45054 20.9946 8.2402 21.0647 8.06725 21.1945L6.99821 21.9937V7.00715H20.9857V21.9937Z" fill="#"/>
                            </svg>
                            <span>Quotation</span>
                        </a>
                    </li>
                    <li>
                        <a href="prospect-list.php">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9906 1.5C11.9906 1.5 13.2333 1.5 14.1119 2.37868C14.1119 2.37868 14.9906 3.25736 14.9906 4.5C14.9906 4.5 14.9906 5.74264 14.1119 6.62132C14.1119 6.62132 13.2333 7.5 11.9906 7.5C11.9906 7.5 10.748 7.5 9.8693 6.62132C9.8693 6.62132 8.99062 5.74264 8.99062 4.5C8.99062 4.5 8.99062 3.25736 9.8693 2.37868C9.8693 2.37868 10.748 1.5 11.9906 1.5ZM11.9906 3C11.9906 3 11.3693 3 10.93 3.43934C10.93 3.43934 10.4906 3.87868 10.4906 4.5C10.4906 4.5 10.4906 5.12132 10.93 5.56066C10.93 5.56066 11.3693 6 11.9906 6C11.9906 6 12.6119 6 13.0513 5.56066C13.0513 5.56066 13.4906 5.12132 13.4906 4.5C13.4906 4.5 13.4906 3.87868 13.0513 3.43934C13.0513 3.43934 12.6119 3 11.9906 3Z" fill="#"/>
                                <path d="M11.25 9.75V14.25C11.25 14.6642 11.5858 15 12 15C12.4142 15 12.75 14.6642 12.75 14.25V9.75C12.75 9.33579 12.4142 9 12 9C11.5858 9 11.25 9.33579 11.25 9.75Z" fill="#"/>
                                <path d="M12 15.3789L17.4394 21.4983C17.5818 21.6584 17.7858 21.75 18 21.75C18.0112 21.75 18.0224 21.7498 18.0335 21.7493C18.2055 21.7416 18.3696 21.6749 18.4983 21.5606C18.6584 21.4182 18.75 21.2142 18.75 21C18.75 20.9888 18.7498 20.9777 18.7493 20.9665C18.7416 20.7945 18.6749 20.6304 18.5606 20.5017L12.5606 13.7517C12.2854 13.4421 11.8113 13.4143 11.5017 13.6895C11.4798 13.709 11.459 13.7298 11.4394 13.7517L5.43944 20.5017C5.31741 20.639 5.25 20.8163 5.25 21C5.25 21.0147 5.25043 21.0294 5.25129 21.044C5.26297 21.2426 5.35306 21.4284 5.50173 21.5606C5.63902 21.6826 5.81631 21.75 6 21.75L6.0035 21.75C6.01702 21.7499 6.03054 21.7495 6.04404 21.7487C6.24261 21.737 6.42841 21.6469 6.56056 21.4983L12 15.3789Z" fill="#"/>
                                <path d="M18.2191 11.5822C19.7415 12.1196 20.6141 12.6431 20.6141 12.6431C20.7307 12.7131 20.8641 12.75 21 12.75L21.0009 12.75C21.0619 12.7499 21.1227 12.7424 21.1819 12.7276C21.3749 12.6794 21.5408 12.5564 21.6431 12.3859C21.7131 12.2693 21.75 12.1359 21.75 12C21.75 11.9903 21.7498 11.9807 21.7494 11.9711C21.7397 11.7181 21.6029 11.4871 21.3859 11.3569C20.3835 10.7554 18.7184 10.1678 18.7184 10.1678C15.4097 9 12 9 12 9C8.59028 9 5.28164 10.1678 5.28164 10.1678C3.61674 10.7554 2.61439 11.3567 2.61439 11.3567C2.38822 11.4924 2.25 11.7366 2.25 12L2.25006 12.0094C2.25171 12.1421 2.28858 12.272 2.35688 12.3859C2.45922 12.5564 2.62512 12.6794 2.8181 12.7276C2.87759 12.7425 2.93868 12.75 3 12.75C3.01209 12.75 3.02417 12.7497 3.03625 12.7491C3.15974 12.7431 3.27985 12.7067 3.38587 12.6431C4.25863 12.1195 5.78086 11.5822 5.78086 11.5822C8.84722 10.5 12 10.5 12 10.5C15.1528 10.5 18.2191 11.5822 18.2191 11.5822Z" fill="#"/>
                            </svg>
                            <span>Prospect management</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg width="21" height="24" viewBox="0 0 21 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.764 9.31692C18.764 9.91439 19.2655 10.4004 19.882 10.4004C20.4985 10.4004 21 9.91439 21 9.31692V5.05167H18.7641L18.764 9.31692Z" fill="#"/>
                                <path d="M17.313 9.31692V1.00711C17.313 0.451828 16.8468 0 16.2738 0C15.7008 0 15.2346 0.451828 15.2346 1.00711V10.4004H17.5694C17.4052 10.0727 17.313 9.70505 17.313 9.31692Z" fill="#"/>
                                <path d="M0 1.82911V24L2.18888 22.9566L4.35315 24L6.89216 22.9414L9.43122 24L11.5951 22.9566L13.7836 24V1.00711C13.7836 0.647859 13.865 0.306656 14.0109 0H1.88732C0.846659 0 0 0.820547 0 1.82911ZM11.1604 18.8745H5.97885V17.4683H11.1604V18.8745ZM11.1604 15.6988H5.97885V14.2925H11.1604V15.6988ZM11.1604 12.523H5.97885V11.1167H11.1604V12.523ZM4.95265 5.08791L6.15563 6.25378L8.84898 3.64345L9.87498 4.63781L6.15563 8.24245L3.92665 6.08222L4.95265 5.08791ZM2.55023 11.1167H4.00123V12.523H2.55023V11.1167ZM2.55023 14.2925H4.00123V15.6988H2.55023V14.2925ZM2.55023 17.4683H4.00123V18.8745H2.55023V17.4683Z" fill="#"/>
                            </svg>
                            <span>Billing</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="menuleft sidebar-Shortcut">
                <label>Shortcut</label>
                <ul>
                    <li>
                        <a href="add-prospect.php">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.9944 9.31622L9.53033 20.7802C9.38968 20.9209 9.19891 20.9999 9 20.9999H4.5C4.5 20.9999 3.87868 20.9999 3.43934 20.5606C3.43934 20.5606 3 20.1212 3 19.4999L3 15.3093C3 15.3093 2.99896 15.015 3.11176 14.7404C3.11176 14.7404 3.22456 14.4657 3.43398 14.2553L14.6853 3.00396C14.6853 3.00396 14.8927 2.79332 15.1707 2.67694C15.1707 2.67694 15.4486 2.56055 15.75 2.56055C15.75 2.56055 16.0514 2.56055 16.3293 2.67694C16.3293 2.67694 16.6073 2.79332 16.8187 3.00804L20.996 7.18521C20.996 7.18521 21.2066 7.39262 21.323 7.67059C21.323 7.67059 21.4394 7.94857 21.4394 8.24992C21.4394 8.24992 21.4394 8.55127 21.323 8.82924C21.323 8.82924 21.2077 9.10456 20.996 9.31463L20.9944 9.31622ZM19.9394 8.24992L19.9353 8.24587L15.75 4.06055L15.746 4.06462L4.5 15.3106V19.4999H8.68934L19.9353 8.25396L19.9394 8.24992Z" fill="#"/>
                                <path d="M17.4693 11.7799C17.6099 11.9206 17.8011 12 18 12C18.1989 12 18.3897 11.921 18.5303 11.7803C18.671 11.6397 18.75 11.4489 18.75 11.25C18.75 11.0511 18.671 10.8603 18.5303 10.7197L13.2804 5.46976C13.1397 5.32902 12.9489 5.25 12.75 5.25C12.5511 5.25 12.3603 5.32902 12.2197 5.46967C12.079 5.61032 12 5.80109 12 6C12 6.19891 12.079 6.38968 12.2197 6.53033L17.4693 11.7799Z" fill="#"/>
                                <path d="M4.3272 14.5165C4.18654 14.3759 3.99578 14.2969 3.79687 14.2969C3.59795 14.2969 3.40719 14.3759 3.26654 14.5165C3.12588 14.6572 3.04687 14.848 3.04687 15.0469C3.04687 15.2458 3.12588 15.4366 3.26654 15.5772L8.46966 20.7803C8.61031 20.921 8.80109 20.9999 9 20.9999L20.25 21C20.6642 21 21 20.6642 21 20.25C21 19.8358 20.6642 19.5 20.25 19.5H9.31065L4.3272 14.5165Z" fill="#" />
                                <path d="M15.905 9.15561C16.0457 9.01496 16.125 8.82391 16.125 8.625C16.125 8.42609 16.046 8.23532 15.9053 8.09467L15.8988 8.08827C15.7588 7.9518 15.5705 7.875 15.375 7.875C15.3525 7.875 15.33 7.87601 15.3076 7.87803C15.1327 7.89381 14.9688 7.97048 14.8447 8.09467L5.84494 17.0944C5.70429 17.235 5.62499 17.4261 5.62499 17.625C5.62499 17.637 5.62528 17.649 5.62586 17.661C5.63481 17.8473 5.71282 18.0235 5.84466 18.1553C5.98531 18.296 6.17608 18.375 6.37499 18.375C6.5739 18.375 6.76467 18.296 6.90532 18.1553L15.905 9.15561Z" fill="#"/>
                            </svg>
                            <span>Add Prospect</span>
                        </a>
                    </li>
                    <li>
                        <a href="raise-quotation.php">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.875 6.75V15C10.875 16.1935 10.4009 17.3381 9.55698 18.182C8.71307 19.0259 7.56847 19.5 6.375 19.5C6.17609 19.5 5.98532 19.421 5.84467 19.2803C5.70402 19.1397 5.625 18.9489 5.625 18.75C5.625 18.5511 5.70402 18.3603 5.84467 18.2197C5.98532 18.079 6.17609 18 6.375 18C7.16989 17.9975 7.93151 17.6807 8.49359 17.1186C9.05566 16.5565 9.37253 15.7949 9.375 15V14.25H3.75C3.35218 14.25 2.97064 14.092 2.68934 13.8107C2.40804 13.5294 2.25 13.1478 2.25 12.75V6.75C2.25 6.35218 2.40804 5.97064 2.68934 5.68934C2.97064 5.40804 3.35218 5.25 3.75 5.25H9.375C9.77282 5.25 10.1544 5.40804 10.4357 5.68934C10.717 5.97064 10.875 6.35218 10.875 6.75ZM20.25 5.25H14.625C14.2272 5.25 13.8456 5.40804 13.5643 5.68934C13.283 5.97064 13.125 6.35218 13.125 6.75V12.75C13.125 13.1478 13.283 13.5294 13.5643 13.8107C13.8456 14.092 14.2272 14.25 14.625 14.25H20.25V15C20.2475 15.7949 19.9307 16.5565 19.3686 17.1186C18.8065 17.6807 18.0449 17.9975 17.25 18C17.0511 18 16.8603 18.079 16.7197 18.2197C16.579 18.3603 16.5 18.5511 16.5 18.75C16.5 18.9489 16.579 19.1397 16.7197 19.2803C16.8603 19.421 17.0511 19.5 17.25 19.5C18.4435 19.5 19.5881 19.0259 20.432 18.182C21.2759 17.3381 21.75 16.1935 21.75 15V6.75C21.75 6.35218 21.592 5.97064 21.3107 5.68934C21.0294 5.40804 20.6478 5.25 20.25 5.25Z" fill="#"/>
                            </svg>
                            <span>Raise Quotation</span>
                        </a>
                    </li>
                    <li>
                        <a href="add-property-details.php">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.75 5.25C12.75 4.83579 12.4142 4.5 12 4.5C11.5858 4.5 11.25 4.83579 11.25 5.25V11.25H5.25C4.83579 11.25 4.5 11.5858 4.5 12C4.5 12.4142 4.83579 12.75 5.25 12.75H11.25V18.75C11.25 19.1642 11.5858 19.5 12 19.5C12.4142 19.5 12.75 19.1642 12.75 18.75V12.75H18.75C19.1642 12.75 19.5 12.4142 19.5 12C19.5 11.5858 19.1642 11.25 18.75 11.25H12.75V5.25Z" fill="#"/>
                            </svg>
                            <span>Add Property</span>
                        </a>
                    </li>
                    <li>
                        <a href="book-property.php">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.5 2.25H6.75C5.95511 2.25247 5.19349 2.56934 4.63141 3.13141C4.06934 3.69349 3.75247 4.45511 3.75 5.25V21C3.75 21.1989 3.82902 21.3897 3.96967 21.5303C4.11032 21.671 4.30109 21.75 4.5 21.75H18C18.1989 21.75 18.3897 21.671 18.5303 21.5303C18.671 21.3897 18.75 21.1989 18.75 21C18.75 20.8011 18.671 20.6103 18.5303 20.4697C18.3897 20.329 18.1989 20.25 18 20.25H5.25C5.25 19.8522 5.40804 19.4706 5.68934 19.1893C5.97064 18.908 6.35218 18.75 6.75 18.75H19.5C19.6989 18.75 19.8897 18.671 20.0303 18.5303C20.171 18.3897 20.25 18.1989 20.25 18V3C20.25 2.80109 20.171 2.61032 20.0303 2.46967C19.8897 2.32902 19.6989 2.25 19.5 2.25ZM17.25 11.25L14.85 9.45C14.7857 9.39982 14.7065 9.37257 14.625 9.37257C14.5435 9.37257 14.4643 9.39982 14.4 9.45L12 11.25V3.75H17.25V11.25Z" fill="#"/>
                            </svg>
                            <span>Book  Property</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
