<div class="d-flex flex-column flex-shrink-0 rounded-3 " style="width: 80px; height: 834px; background-color:#1F1D2B">
    <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
        <li class="nav-item {{ Request::is('home') ? 'active' : '' }}">
            <a href="#" class="nav-link py-3 rounded-0" title="Icon" data-bs-toggle="tooltip"
                data-bs-placement="right">
                <svg class="bi pe-none" width="40" height="40" role="img" aria-label="Home">
                    <use xlink:href="#icon" />
                </svg>
            </a>
        </li>
        <li class="nav-item {{ Request::is('home') ? 'active' : '' }}">
            <a href="/" class="nav-link py-3 rounded-0" title="Home" data-bs-toggle="tooltip"
                data-bs-placement="right">
                <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Home">
                    <use xlink:href="#home" />
                </svg>
            </a>
        </li>
        <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
            <a href="/dashboard" class="nav-link py-3 rounded-0" title="Dashboard" data-bs-toggle="tooltip"
                data-bs-placement="right">
                <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Dashboard">
                    <use xlink:href="#dashboard" />
                </svg>
            </a>
        </li>
        <li>
            <a href="/settings" class="nav-link py-3 rounded-0" title="Settings" data-bs-toggle="tooltip"
                data-bs-placement="right">
                <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Settings">
                    <use xlink:href="#setting" />
                </svg>
            </a>
        </li>
    </ul>
    <div class="nav-item p-4">
        <a href="#" class="nav-link py-3 rounded-0" title="Settings" data-bs-toggle="tooltip"
            data-bs-placement="right">
            <svg class="bi pe-none" width="24" height="24" role="img" aria-label="Settings">
                <use xlink:href="#logout" />
            </svg>
        </a>
    </div>
</div>

<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="icon" viewBox="0 0 56 56">
        <rect opacity="0.26" width="56" height="56" rx="12" fill="#EB966A"/>
        <path
            d="M39.6666 11.3334H16.3333C13.5766 11.3334 11.3333 13.5767 11.3333 16.3334V21.0517C11.3333 22.8067 11.9699 24.4017 12.9999 25.6284V41.3334C12.9999 41.7754 13.1755 42.1993 13.4881 42.5119C13.8006 42.8244 14.2246 43 14.6666 43H27.9999C28.4419 43 28.8659 42.8244 29.1784 42.5119C29.491 42.1993 29.6666 41.7754 29.6666 41.3334V33H36.3333V41.3334C36.3333 41.7754 36.5088 42.1993 36.8214 42.5119C37.134 42.8244 37.5579 43 37.9999 43H41.3333C41.7753 43 42.1992 42.8244 42.5118 42.5119C42.8243 42.1993 42.9999 41.7754 42.9999 41.3334V25.6267C44.0299 24.4017 44.6666 22.8067 44.6666 21.05V16.3334C44.6666 13.5767 42.4233 11.3334 39.6666 11.3334ZM41.3333 16.3334V21.0517C41.3333 22.9517 39.9183 24.5717 38.1816 24.6634L37.9999 24.6667C36.1616 24.6667 34.6666 23.1717 34.6666 21.3334V14.6667H39.6666C40.5866 14.6667 41.3333 15.415 41.3333 16.3334ZM24.6666 21.3334V14.6667H31.3333V21.3334C31.3333 23.1717 29.8383 24.6667 27.9999 24.6667C26.1616 24.6667 24.6666 23.1717 24.6666 21.3334ZM14.6666 16.3334C14.6666 15.415 15.4133 14.6667 16.3333 14.6667H21.3333V21.3334C21.3333 23.1717 19.8383 24.6667 17.9999 24.6667L17.8183 24.6617C16.0816 24.5717 14.6666 22.9517 14.6666 21.0517V16.3334ZM24.6666 34.6667H17.9999V29.6667H24.6666V34.6667Z"
            fill="#FFCA40" />
    </symbol>
    <symbol id="home" viewBox="0 0 24 24">
        <path
            d="M7.73024 0.788309C9.00024 -0.220691 10.7802 -0.260691 12.0892 0.668309L12.2502 0.788309L18.3392 5.65931C19.0092 6.17831 19.4202 6.94931 19.4902 7.78831L19.5002 7.98931V16.0983C19.5002 18.1883 17.8492 19.8883 15.7802 19.9983H13.7902C12.8392 19.9793 12.0702 19.2393 12.0002 18.3093L11.9902 18.1683V15.3093C11.9902 14.9983 11.7592 14.7393 11.4502 14.6883L11.3602 14.6783H8.68924C8.37024 14.6883 8.11024 14.9183 8.07024 15.2183L8.06024 15.3093V18.1593C8.06024 18.2183 8.04924 18.2883 8.04024 18.3383L8.03024 18.3593L8.01924 18.4283C7.90024 19.2793 7.20024 19.9283 6.33024 19.9893L6.20024 19.9983H4.41024C2.32024 19.9983 0.610244 18.3593 0.500244 16.2983V7.98931C0.509244 7.13831 0.880244 6.34831 1.50024 5.79831L7.73024 0.788309ZM11.3802 1.87831C10.6202 1.26831 9.54025 1.23931 8.74024 1.76831L8.58924 1.87831L2.50924 6.77931C2.16024 7.03831 1.95024 7.42831 1.90024 7.83831L1.88924 7.99831V16.0983C1.88924 17.4283 2.92924 18.5183 4.25024 18.5983H6.20024C6.42024 18.5983 6.61024 18.4493 6.63924 18.2393L6.66024 18.0593L6.67024 18.0083V15.3093C6.67024 14.2393 7.49024 13.3693 8.54024 13.2883H11.3602C12.4292 13.2883 13.2992 14.1093 13.3802 15.1593V18.1683C13.3802 18.3783 13.5302 18.5593 13.7302 18.5983H15.5892C16.9292 18.5983 18.0192 17.5693 18.0992 16.2583L18.1102 16.0983V7.99831C18.0992 7.56931 17.9202 7.16831 17.6102 6.86931L17.4802 6.75831L11.3802 1.87831Z"
            fill="#FFCA40" />
    </symbol>
    <symbol id="dashboard" viewBox="0 0 24 24">
        <path
            d="M10.4978 6.7606C10.5855 6.93485 10.6382 7.12392 10.6533 7.32102L11.0419 12.8095C11.0471 12.8847 11.0827 12.9548 11.1409 13.0042C11.1845 13.0413 11.2381 13.0645 11.298 13.0712L11.3599 13.0724L16.9341 12.7366C17.3867 12.71 17.8305 12.8675 18.1604 13.1719C18.4902 13.4763 18.6768 13.9004 18.6744 14.3912C18.4265 18.0037 15.773 21.0237 12.159 21.8065C8.54503 22.5893 4.83611 20.9474 3.05781 17.7848C2.58229 16.9695 2.26178 16.0778 2.1138 15.1749L2.06643 14.8359C2.0253 14.5821 2.00319 14.3257 2 14.0795L2.00311 13.8372C2.0134 10.0655 4.66156 6.80403 8.38809 5.92434L8.64383 5.86807L8.7814 5.84532C9.502 5.74681 10.211 6.12453 10.4978 6.7606ZM9.01643 7.27813L8.93217 7.28772L8.70369 7.33933C5.73526 8.05477 3.6062 10.6103 3.48796 13.621L3.4828 13.8661C3.47569 14.0525 3.4825 14.2392 3.50499 14.4378L3.53277 14.6408C3.63212 15.495 3.90795 16.3206 4.34914 17.0772C5.81632 19.6863 8.86669 21.0367 11.839 20.3929C14.8113 19.7491 16.9936 17.2653 17.1958 14.3414C17.1958 14.2974 17.1774 14.2552 17.1446 14.225C17.1228 14.2049 17.0959 14.1912 17.0675 14.1851L17.024 14.1817L11.459 14.5169C10.9894 14.5503 10.5255 14.3992 10.17 14.0971C9.81456 13.7951 9.59684 13.3669 9.56522 12.91L9.17702 7.42617C9.17632 7.41708 9.17385 7.40822 9.15682 7.37299C9.1315 7.31695 9.07648 7.28131 9.01643 7.27813ZM13.423 2.00105C17.7084 2.12227 21.3029 5.20162 21.9904 9.34084L22 9.4567L21.9977 9.65855C21.9737 9.95621 21.8538 10.2393 21.6545 10.4668C21.4041 10.7524 21.0477 10.9286 20.6588 10.9567L14.0133 11.39C13.1615 11.4382 12.4295 10.8051 12.3741 9.97348L11.9299 3.44914L11.9349 3.30295L11.957 3.13824C12.0162 2.84619 12.1684 2.57938 12.3925 2.37643C12.6739 2.12156 13.0474 1.98661 13.423 2.00105ZM13.4113 3.44902L13.8511 9.87814C13.8537 9.91719 13.888 9.94688 13.9214 9.94502L20.5182 9.51352L20.4854 9.33352C19.8318 6.0802 17.0119 3.66443 13.6287 3.45932L13.4113 3.44902Z"
            fill="#FFCA40" />
    </symbol>
    <symbol id="setting" viewBox="0 0 24 24">
        <path
            d="M12.6161 2C13.3251 1.99971 14.0041 2.28061 14.4983 2.77871C14.9925 3.27681 15.2599 3.94968 15.2383 4.57766L15.2468 4.72535C15.2641 4.87079 15.3124 5.01116 15.3908 5.14054C15.5435 5.39567 15.7935 5.58081 16.0857 5.65514C16.3779 5.72947 16.6882 5.68688 16.9821 5.51839L17.146 5.4355C18.3759 4.86897 19.8511 5.31918 20.5333 6.47928L21.1465 7.52174C21.1627 7.54922 21.1769 7.57762 21.1892 7.60674L21.2461 7.71842C21.7945 8.86519 21.4043 10.2293 20.3624 10.9223L20.1051 11.0807C19.9706 11.1726 19.8585 11.2926 19.7742 11.4368C19.6218 11.6929 19.58 11.998 19.658 12.2844C19.736 12.5708 19.9272 12.8149 20.2174 12.9793L20.3843 13.0841C20.8887 13.4297 21.253 13.9391 21.4119 14.523C21.5912 15.1817 21.495 15.8833 21.1399 16.4804L20.4803 17.557L20.3808 17.7089C19.6058 18.8008 18.1011 19.1344 16.9527 18.485L16.8166 18.4163C16.6746 18.3541 16.5214 18.3199 16.382 18.316C16.0786 18.3146 15.7872 18.432 15.5727 18.6422C15.3582 18.8524 15.2383 19.1379 15.2391 19.4698L15.231 19.6414C15.12 20.9703 13.9845 22 12.6164 22H11.3811C9.93219 22 8.75765 20.8493 8.75912 19.4753L8.75063 19.3277C8.73337 19.1822 8.68504 19.0418 8.6027 18.9057C8.45336 18.65 8.20591 18.4633 7.91538 18.3871C7.62484 18.3109 7.31529 18.3516 7.01565 18.5213L6.83762 18.6084C6.2746 18.8565 5.63953 18.9023 5.04445 18.7366C4.37306 18.5497 3.80539 18.1083 3.47412 17.5224L2.83679 16.4442L2.75197 16.2844C2.17157 15.0841 2.62651 13.6412 3.78115 12.9875L3.88645 12.9228C4.19491 12.7137 4.37987 12.3688 4.37987 12C4.37987 11.599 4.16149 11.2284 3.77948 11.0115L3.62449 10.9141C2.51001 10.1548 2.16949 8.68049 2.85989 7.50696L3.50918 6.46166C4.23128 5.23376 5.83155 4.81017 7.06235 5.50171L7.19559 5.5713C7.33141 5.63238 7.47895 5.6648 7.62101 5.66628C8.24742 5.66634 8.75775 5.17352 8.76724 4.54181L8.77575 4.3478C8.82704 3.74716 9.09307 3.1827 9.52796 2.75457C10.0186 2.27155 10.6855 2 11.3811 2H12.6161ZM12.6164 3.44774H11.3811C11.0786 3.44774 10.7887 3.56581 10.5753 3.77582C10.3863 3.96196 10.2706 4.20741 10.2503 4.43661L10.2368 4.7415C10.1334 6.07087 8.99969 7.11416 7.61326 7.11398C7.25588 7.11034 6.90355 7.03293 6.54427 6.87026L6.3519 6.77085C5.8038 6.46315 5.1049 6.64815 4.78057 7.19925L4.13128 8.24455C3.83377 8.75044 3.98256 9.39466 4.44324 9.70925L4.70395 9.871C5.42196 10.3467 5.85754 11.1429 5.85754 12C5.85754 12.8446 5.43413 13.634 4.70219 14.1296L4.54639 14.2256C4.03354 14.5163 3.83562 15.144 4.07398 15.6383L4.13027 15.7449L4.75952 16.8084C4.90728 17.0696 5.1552 17.2624 5.44842 17.344C5.70831 17.4164 5.98569 17.3964 6.20208 17.3018L6.3108 17.2497C6.91096 16.9066 7.62614 16.8126 8.29737 16.9886C8.96861 17.1645 9.54028 17.5959 9.87937 18.1768C10.0618 18.478 10.1772 18.8132 10.2219 19.1985L10.2421 19.552C10.3043 20.1145 10.7905 20.5523 11.3811 20.5523H12.6164C13.2137 20.5523 13.7099 20.1023 13.7565 19.5511L13.7621 19.4421C13.7588 18.7585 14.0345 18.1019 14.5279 17.6185C15.0212 17.1351 15.6914 16.865 16.4053 16.8686C16.7556 16.8778 17.1004 16.9547 17.4528 17.11L17.7687 17.2682C18.2647 17.4814 18.8529 17.3258 19.1511 16.9067L19.2236 16.7957L19.868 15.7436C20.0203 15.4875 20.0621 15.1824 19.9841 14.896C19.915 14.6422 19.7566 14.4207 19.5645 14.2882L19.2922 14.1195C18.7716 13.7748 18.3932 13.2563 18.2302 12.6574C18.0509 11.9987 18.1471 11.2971 18.4946 10.7126C18.6849 10.3872 18.9464 10.1073 19.2873 9.87532L19.448 9.77613C19.9601 9.4827 20.1578 8.85504 19.9212 8.35884L19.8505 8.22529L19.8378 8.19726L19.253 7.20208C18.9764 6.73175 18.4008 6.52853 17.9125 6.6891L17.8015 6.73265L17.6983 6.78415C17.1001 7.12941 16.3863 7.22736 15.7143 7.05641C15.0423 6.88546 14.4673 6.45965 14.1181 5.87616C13.9357 5.57504 13.8203 5.23984 13.7756 4.85454L13.7624 4.60249C13.7713 4.29923 13.6546 4.00536 13.4387 3.78783C13.2229 3.57029 12.9264 3.44774 12.6164 3.44774ZM12.0032 8.73182C13.8455 8.73182 15.339 10.195 15.339 12C15.339 13.805 13.8455 15.2682 12.0032 15.2682C10.161 15.2682 8.66748 13.805 8.66748 12C8.66748 10.195 10.161 8.73182 12.0032 8.73182ZM12.0032 10.1796C10.977 10.1796 10.1452 10.9946 10.1452 12C10.1452 13.0054 10.977 13.8204 12.0032 13.8204C13.0294 13.8204 13.8613 13.0054 13.8613 12C13.8613 10.9946 13.0294 10.1796 12.0032 10.1796Z"
            fill="#FFCA40" />
    </symbol>
    <symbol id="logout" viewBox="0 0 20 20">
        <path
            d="M9.33097 0.0214844C11.7102 0.0214844 13.6521 1.89542 13.7611 4.24772L13.766 4.45648V5.38948C13.766 5.8037 13.4302 6.13948 13.016 6.13948C12.6363 6.13948 12.3225 5.85733 12.2728 5.49125L12.266 5.38948V4.45648C12.266 2.89358 11.044 1.61575 9.50341 1.52647L9.33097 1.52148H4.45597C2.89392 1.52148 1.61623 2.74362 1.52696 4.28406L1.52197 4.45648V15.5865C1.52197 17.1493 2.74388 18.4272 4.28363 18.5165L4.45597 18.5215H9.34097C10.8983 18.5215 12.172 17.3039 12.261 15.7693L12.266 15.5975V14.6545C12.266 14.2403 12.6018 13.9045 13.016 13.9045C13.3957 13.9045 13.7095 14.1866 13.7591 14.5527L13.766 14.6545V15.5975C13.766 17.9687 11.8992 19.9046 9.55533 20.0164L9.34097 20.0215H4.45597C2.07753 20.0215 0.135813 18.1474 0.0267998 15.7952L0.0219727 15.5865V4.45648C0.0219727 2.07743 1.89573 0.135347 4.24728 0.0263125L4.45597 0.0214844H9.33097ZM17.326 6.50234L17.4103 6.57478L20.3383 9.48978C20.3647 9.51594 20.3878 9.54256 20.409 9.57073L20.3383 9.48978C20.3689 9.52019 20.3963 9.55258 20.4205 9.58653C20.4376 9.61028 20.4533 9.63538 20.4676 9.66142C20.4702 9.66648 20.4728 9.67145 20.4754 9.67645C20.4881 9.70042 20.4993 9.72529 20.5092 9.75084C20.5132 9.76202 20.5173 9.77334 20.5211 9.78473C20.5284 9.80575 20.5345 9.8274 20.5397 9.84942C20.5421 9.86118 20.5445 9.87286 20.5467 9.88457C20.5508 9.90501 20.5538 9.9261 20.5559 9.94745C20.557 9.96231 20.558 9.97701 20.5586 9.99174C20.5593 10.0016 20.5595 10.0115 20.5595 10.0214L20.5586 10.0497C20.5581 10.0651 20.557 10.0805 20.5555 10.0958L20.5595 10.0214C20.5595 10.0682 20.5552 10.1141 20.547 10.1585C20.5445 10.1696 20.5421 10.1814 20.5394 10.193C20.5343 10.2162 20.5279 10.2387 20.5205 10.2607C20.5167 10.2709 20.513 10.2813 20.509 10.2915C20.4997 10.3164 20.4889 10.3405 20.4769 10.3639C20.4739 10.3692 20.4708 10.3751 20.4675 10.381C20.4331 10.4443 20.39 10.5015 20.3398 10.5517L20.3384 10.5527L17.4104 13.4687C17.1169 13.761 16.642 13.76 16.3498 13.4665C16.084 13.1997 16.0607 12.783 16.2791 12.4898L16.3519 12.4059L17.991 10.7705L7.76847 10.7714C7.35426 10.7714 7.01847 10.4356 7.01847 10.0214C7.01847 9.64169 7.30063 9.32789 7.6667 9.27823L7.76847 9.27139L17.993 9.27048L16.352 7.63779C16.0852 7.37212 16.06 6.95551 16.2772 6.66142L16.3497 6.57714C16.6153 6.31028 17.0319 6.28514 17.326 6.50234Z"
            fill="#FFCA40" />
    </symbol>
</svg>
