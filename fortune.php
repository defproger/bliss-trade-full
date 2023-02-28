<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bliss Trade</title>
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/fortune.css">
</head>
<body>
<!--lavalamp background-->
<div class="background">
    <canvas id="bubble"></canvas>
</div>

<header class="headertext container">
    <div id="logo">
        <svg width="366" height="52" viewBox="0 0 366 52" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M18.2012 11.6692L0.201172 0.669189L2.20117 15.6692L2.70117 26.1692L3.20117 27.1692L8.20117 37.6692L18.7012 49.1692L24.2012 51.1692H28.7012L33.7012 49.1692L43.7012 38.6692L49.7012 26.6692L50.2012 16.1692L52.2012 0.169189L34.2012 11.6692H18.2012Z"
                  fill="white"/>
            <path d="M39.3761 37.5234L45.3967 29.0359L34.5961 34.6942L32.3828 39.2919L39.3761 37.5234Z"
                  fill="#030303"/>
            <path d="M13.1726 37.5234L7.15234 29.0359L17.953 34.6942L20.1662 39.2919L13.1726 37.5234Z"
                  fill="#030303"/>
            <path d="M26.2748 48.1332L30.1699 44.2434H22.3789L26.2748 48.1332Z" fill="#030303"/>
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M0.381934 0L18.3803 11.4552H34.1698L52.1682 0L52.3028 0.210938L52.5501 0.244719L50.4276 15.794L50.074 26.7446L49.8245 26.7366L50.0484 26.847L44.5596 37.9878L44.3357 37.8773L44.5189 38.047L33.8957 49.5412L33.7124 49.3716L33.791 49.6087L28.4788 51.3773L28.4002 51.1402L28.3998 51.3901H24.1503L24.1507 51.1402L24.0713 51.3773L18.7595 49.6087L18.8389 49.3716L18.6549 49.5412L8.03164 38.047L8.21559 37.8773L7.99098 37.9878L2.50173 26.847L2.72633 26.7366L2.47612 26.7446L2.12342 15.794L0 0.244733L0.248047 0.210938L0.381934 0ZM1.55255 1.33772L17.8931 11.7378L13.7279 15.4183L1.55255 1.33772ZM13.1574 15.523H2.59105L0.609329 1.01134L13.1574 15.523ZM13.9804 15.8624L18.1207 34.2975L25.958 29.4681L18.2179 12.118L13.9804 15.8624ZM25.8731 30.1078L18.2765 34.7888L20.3921 39.1834L20.1662 39.2919L20.395 39.1899L22.3193 43.496L25.8731 30.1078ZM19.7095 38.9184L17.7642 34.8772L7.9592 29.7405L13.3237 37.3036L19.7095 38.9184ZM12.7121 37.3056L6.98398 29.2298L3.28708 27.3097L8.36517 37.6159L12.7121 37.3056ZM7.35509 28.8596L2.72871 16.023H13.504L17.5913 34.2222L7.35509 28.8596ZM2.67363 17.3448L6.70104 28.5195L2.97114 26.5822L2.67363 17.3448ZM13.5719 37.8821L19.988 39.5045L21.994 43.9935H15.8265L13.5719 37.8821ZM26.2755 28.9525L18.6928 11.9552H33.8573L26.2755 28.9525ZM34.657 11.7378L50.9977 1.33767L38.8227 15.4183L34.657 11.7378ZM38.5702 15.8625L34.3322 12.118L26.593 29.4681L34.4299 34.2975L38.5702 15.8625ZM34.7864 34.8772L32.841 38.9184L39.2264 37.3036L44.5913 29.7405L34.7864 34.8772ZM45.5666 29.2298L49.2631 27.3097L44.1854 37.6159L39.838 37.3056L45.5666 29.2298ZM38.9783 37.8821L32.5626 39.5045L30.5562 43.9935H36.7245L38.9783 37.8821ZM32.3841 39.2919L32.1585 39.1835L34.274 34.7888L26.6779 30.1078L30.2309 43.496L32.1556 39.1899L32.3841 39.2919ZM34.9592 34.2222L45.1955 28.8596L49.8223 16.023H39.0466L34.9592 34.2222ZM39.3932 15.523H49.9599L51.9409 1.01131L39.3932 15.523ZM49.8772 17.345L45.8496 28.5194L49.579 26.5822L49.8772 17.345ZM17.242 47.2758L11.3017 40.8484L15.4603 44.4083L17.242 47.2758ZM16.1019 44.4935L18.8495 48.9156L21.9031 44.4935H16.1019ZM24.6332 50.8901H27.9171L26.2755 48.5666L24.6332 50.8901ZM26.6013 48.1613L30.1352 44.6322L33.3171 49.2396L28.4969 50.8443L26.6013 48.1613ZM33.701 48.9156L30.6471 44.4935H36.449L33.701 48.9156ZM37.0907 44.4083L35.3091 47.2752L41.2483 40.8491L37.0907 44.4083ZM26.2755 30.5407L22.7046 43.9935H29.8456L26.2755 30.5407ZM13.0035 37.7861L8.84033 38.0833L15.0853 43.4292L13.0035 37.7861ZM43.7103 38.0833L39.5466 37.7861L37.4655 43.4293L43.7103 38.0833ZM22.415 44.6322L19.2335 49.2396L24.0533 50.8443L25.9496 48.1613L22.415 44.6322ZM29.5664 44.4935H22.9838L26.2755 47.7801L29.5664 44.4935Z"
                  fill="black"/>
            <path d="M91.7051 32.8936C91.7051 35.9372 90.7204 38.2158 88.751 39.7295C86.7816 41.2432 83.9821 42 80.3525 42H70.1963V10.1396H79.791C81.1256 10.1396 82.4359 10.2536 83.7217 10.4814C85.0075 10.693 86.1549 11.0999 87.1641 11.7021C88.1895 12.3044 89.0195 13.1426 89.6543 14.2168C90.2891 15.2747 90.6064 16.6663 90.6064 18.3916C90.6064 21.6956 88.9544 23.9499 85.6504 25.1543C89.6869 26.3913 91.7051 28.971 91.7051 32.8936ZM87.2617 18.3916C87.2617 17.2686 87.0257 16.349 86.5537 15.6328C86.0817 14.9167 85.4795 14.3714 84.7471 13.9971C84.0146 13.6064 83.209 13.346 82.3301 13.2158C81.4512 13.0693 80.6048 12.9961 79.791 12.9961H73.541V23.8115H79.791C80.7025 23.8115 81.5977 23.7464 82.4766 23.6162C83.3555 23.4697 84.1449 23.2012 84.8447 22.8105C85.5446 22.4036 86.1224 21.8503 86.5781 21.1504C87.0339 20.4505 87.2617 19.5309 87.2617 18.3916ZM88.3604 32.8936C88.3604 30.6963 87.6442 29.1012 86.2119 28.1084C84.7959 27.0993 82.8428 26.5947 80.3525 26.5947H73.541V39.1436H80.3525C82.8428 39.1436 84.7959 38.6227 86.2119 37.5811C87.6442 36.5231 88.3604 34.9606 88.3604 32.8936Z"
                  fill="black"/>
            <path d="M114.483 42H100.836L102 39.1436H105.987V12.9961H100.836L102 10.1396H109.356V39.1436H114.483V42Z"
                  fill="black"/>
            <path d="M137.237 14.7051H132.696L134 10.1396H137.237V14.7051ZM141.778 42H128.131V39.1436H133.282V22.1025H128.131L129 19.2461H136.651V39.1436H141.778V42Z"
                  fill="black"/>
            <path d="M173.028 35.7012C173.028 37.0358 172.695 38.1426 172.027 39.0215C171.36 39.9004 170.497 40.6003 169.439 41.1211C168.398 41.6419 167.226 42.0081 165.924 42.2197C164.638 42.4476 163.377 42.5615 162.14 42.5615C160.073 42.5615 158.014 42.2604 155.963 41.6582C153.912 41.056 150.497 38.9766 149 38L152.13 36.4092C153.806 37.4671 155.458 38.2809 157.086 38.8506C158.714 39.4202 160.398 39.7051 162.14 39.7051C167.169 39.7051 169.684 38.403 169.684 35.7988C169.684 35.1641 169.472 34.6514 169.049 34.2607C168.642 33.8538 168.089 33.5283 167.389 33.2842C166.689 33.0238 165.883 32.8203 164.972 32.6738C164.076 32.5273 163.132 32.389 162.14 32.2588C160.87 32.0798 159.609 31.8682 158.355 31.624C157.102 31.3799 155.955 31.0137 154.913 30.5254C153.888 30.0371 153.058 29.3861 152.423 28.5723C151.804 27.7585 151.495 26.6842 151.495 25.3496C151.495 24.2103 151.78 23.2256 152.35 22.3955C152.936 21.5654 153.709 20.8737 154.669 20.3203C155.646 19.7669 156.785 19.36 158.087 19.0996C159.389 18.8392 160.74 18.709 162.14 18.709C164.142 18.709 165.932 18.945 167.511 19.417C169.09 19.8727 170.514 20.5319 171.783 21.3945L170.44 24.0068C169.138 23.0954 167.82 22.4606 166.485 22.1025C165.151 21.7282 163.702 21.541 162.14 21.541C161.44 21.541 160.659 21.6061 159.796 21.7363C158.95 21.8503 158.16 22.0618 157.428 22.3711C156.695 22.6641 156.077 23.0547 155.572 23.543C155.084 24.015 154.84 24.6172 154.84 25.3496C154.84 25.9844 155.043 26.4971 155.45 26.8877C155.873 27.262 156.435 27.5794 157.135 27.8398C157.835 28.084 158.632 28.2793 159.527 28.4258C160.439 28.5723 161.391 28.7106 162.384 28.8408C163.621 29.0199 164.866 29.2314 166.119 29.4756C167.389 29.7197 168.536 30.0778 169.562 30.5498C170.603 31.0218 171.441 31.6647 172.076 32.4785C172.711 33.2923 173.028 34.3665 173.028 35.7012Z"
                  fill="black"/>
            <path d="M200.323 35.7012C200.323 37.0358 199.99 38.1426 199.322 39.0215C198.655 39.9004 197.792 40.6003 196.734 41.1211C195.693 41.6419 194.521 42.0081 193.219 42.2197C191.933 42.4476 190.672 42.5615 189.435 42.5615C187.368 42.5615 185.309 42.2604 183.258 41.6582C181.207 41.056 177.497 38.9766 176 38L179.425 36.4092C181.101 37.4671 182.753 38.2809 184.381 38.8506C186.008 39.4202 187.693 39.7051 189.435 39.7051C194.464 39.7051 196.979 38.403 196.979 35.7988C196.979 35.1641 196.767 34.6514 196.344 34.2607C195.937 33.8538 195.383 33.5283 194.684 33.2842C193.984 33.0238 193.178 32.8203 192.267 32.6738C191.371 32.5273 190.427 32.389 189.435 32.2588C188.165 32.0798 186.904 31.8682 185.65 31.624C184.397 31.3799 183.25 31.0137 182.208 30.5254C181.183 30.0371 180.353 29.3861 179.718 28.5723C179.099 27.7585 178.79 26.6842 178.79 25.3496C178.79 24.2103 179.075 23.2256 179.645 22.3955C180.23 21.5654 181.004 20.8737 181.964 20.3203C182.94 19.7669 184.08 19.36 185.382 19.0996C186.684 18.8392 188.035 18.709 189.435 18.709C191.437 18.709 193.227 18.945 194.806 19.417C196.384 19.8727 197.809 20.5319 199.078 21.3945L197.735 24.0068C196.433 23.0954 195.115 22.4606 193.78 22.1025C192.446 21.7282 190.997 21.541 189.435 21.541C188.735 21.541 187.953 21.6061 187.091 21.7363C186.244 21.8503 185.455 22.0618 184.723 22.3711C183.99 22.6641 183.372 23.0547 182.867 23.543C182.379 24.015 182.135 24.6172 182.135 25.3496C182.135 25.9844 182.338 26.4971 182.745 26.8877C183.168 27.262 183.73 27.5794 184.43 27.8398C185.13 28.084 185.927 28.2793 186.822 28.4258C187.734 28.5723 188.686 28.7106 189.679 28.8408C190.916 29.0199 192.161 29.2314 193.414 29.4756C194.684 29.7197 195.831 30.0778 196.856 30.5498C197.898 31.0218 198.736 31.6647 199.371 32.4785C200.006 33.2923 200.323 34.3665 200.323 35.7012Z"
                  fill="black"/>
            <path d="M255.523 20.9062H252.667V12.9961H245.831V39.1436H250.958V42H237L238 39.1436H242.462V12.9961H236L234.5 20.9062H232L234 10.1396H255.523V20.9062Z"
                  fill="black"/>
            <path d="M281.573 22.4443C280.369 21.8421 278.937 21.541 277.276 21.541C275.909 21.541 274.688 21.834 273.614 22.4199C272.54 23.0059 271.629 23.779 270.88 24.7393C270.131 25.6833 269.553 26.7738 269.146 28.0107C268.756 29.2314 268.561 30.4928 268.561 31.7949V39.1436H273.712V42H260.064L261 39.1436H265.216V22.1025H260.064L261 19.2461H268.561V24.959C270.09 20.7923 272.996 18.709 277.276 18.709C278.432 18.709 279.433 18.7822 280.279 18.9287C281.142 19.0752 281.939 19.3356 282.672 19.71L281.573 22.4443Z"
                  fill="black"/>
            <path d="M287.311 35.8477C287.311 34.4154 287.669 33.2191 288.385 32.2588C289.101 31.2822 290.037 30.5173 291.192 29.9639C292.364 29.3942 293.699 28.9873 295.196 28.7432C296.71 28.4827 298.248 28.3525 299.811 28.3525C300.413 28.3525 300.95 28.3607 301.422 28.377C301.91 28.3932 302.366 28.4176 302.789 28.4502C303.229 28.4827 303.668 28.5234 304.107 28.5723C304.547 28.6211 305.027 28.6781 305.548 28.7432V27.1074C305.548 26.0007 305.304 25.0892 304.815 24.373C304.343 23.6569 303.757 23.0954 303.058 22.6885C302.358 22.2653 301.625 21.9723 300.86 21.8096C300.095 21.6305 299.444 21.541 298.907 21.541C297.215 21.541 295.652 21.7689 294.22 22.2246C292.787 22.6803 288.548 24.235 287.311 25L288.702 21.541C290.069 20.7109 291.599 20.0355 293.292 19.5146C295.001 18.9775 296.873 18.709 298.907 18.709C300.144 18.709 301.357 18.8717 302.545 19.1973C303.749 19.5065 304.824 19.9948 305.768 20.6621C306.728 21.3132 307.493 22.1758 308.062 23.25C308.632 24.3242 308.917 25.61 308.917 27.1074V42H305.548V38.1914C304.962 38.9238 304.295 39.5667 303.546 40.1201C302.813 40.6735 302.04 41.1292 301.227 41.4873C300.413 41.8291 299.599 42.0895 298.785 42.2686C297.971 42.4639 297.198 42.5615 296.466 42.5615C293.455 42.5615 291.176 41.9837 289.63 40.8281C288.084 39.6725 287.311 38.0124 287.311 35.8477ZM296.466 39.7051C297.866 39.7051 299.119 39.5016 300.226 39.0947C301.349 38.6716 302.301 38.1507 303.082 37.5322C303.863 36.9137 304.465 36.2546 304.889 35.5547C305.328 34.8548 305.548 34.2201 305.548 33.6504V31.502C304.457 31.3392 303.408 31.2497 302.398 31.2334C301.406 31.2171 300.543 31.209 299.811 31.209C298.606 31.209 297.442 31.2904 296.319 31.4531C295.213 31.6159 294.244 31.8844 293.414 32.2588C292.584 32.6169 291.917 33.0889 291.412 33.6748C290.908 34.2607 290.655 34.985 290.655 35.8477C290.655 36.8079 291.119 37.695 292.047 38.5088C292.991 39.3063 294.464 39.7051 296.466 39.7051Z"
                  fill="black"/>
            <path d="M336.212 42H332.843V39.9004C331.882 40.763 330.825 41.4222 329.669 41.8779C328.53 42.3337 327.358 42.5615 326.153 42.5615C324.347 42.5615 322.727 42.2686 321.295 41.6826C319.863 41.0967 318.65 40.2829 317.657 39.2412C316.681 38.1833 315.924 36.9219 315.387 35.457C314.866 33.9922 314.605 32.389 314.605 30.6475C314.605 28.9222 314.866 27.3271 315.387 25.8623C315.924 24.3812 316.681 23.1198 317.657 22.0781C318.65 21.0202 319.863 20.1982 321.295 19.6123C322.727 19.0101 324.347 18.709 326.153 18.709C327.358 18.709 328.53 18.9287 329.669 19.3682C330.825 19.7913 331.882 20.4342 332.843 21.2969V12.9961H328.302L329 10.1396H336.212V42ZM332.843 24.5439C331.882 23.486 330.833 22.721 329.693 22.249C328.57 21.777 327.374 21.541 326.104 21.541C324.77 21.541 323.59 21.777 322.564 22.249C321.555 22.721 320.709 23.3639 320.025 24.1777C319.342 24.9915 318.821 25.9518 318.463 27.0586C318.121 28.1491 317.95 29.3454 317.95 30.6475C317.95 31.9495 318.121 33.154 318.463 34.2607C318.821 35.3512 319.342 36.3034 320.025 37.1172C320.709 37.931 321.555 38.5739 322.564 39.0459C323.59 39.5179 324.77 39.7539 326.104 39.7539C328.676 39.7539 330.922 38.7367 332.843 36.7021V24.5439Z"
                  fill="black"/>
            <path d="M345.294 31.7949C345.538 34.2038 346.417 36.1243 347.931 37.5566C349.444 38.9889 351.414 39.7051 353.839 39.7051C355.548 39.7051 357.07 39.3551 358.404 38.6553C359.739 37.9554 360.74 37.0846 361.407 36.043L366 36C364.861 37.5951 361.253 40.4701 359.674 41.3164C358.095 42.1465 356.15 42.5615 353.839 42.5615C352.081 42.5615 350.47 42.2686 349.005 41.6826C347.54 41.0967 346.271 40.2829 345.196 39.2412C344.138 38.1833 343.316 36.93 342.73 35.4814C342.145 34.0329 341.852 32.4216 341.852 30.6475C341.852 28.9222 342.112 27.3353 342.633 25.8867C343.17 24.4219 343.935 23.1605 344.928 22.1025C345.937 21.0283 347.158 20.1982 348.59 19.6123C350.022 19.0101 351.625 18.709 353.399 18.709C355.336 18.709 357.029 19.0345 358.478 19.6855C359.926 20.3366 361.131 21.2399 362.091 22.3955C363.067 23.5348 363.784 24.902 364.239 26.4971C364.711 28.0921 364.947 29.8581 364.947 31.7949H345.294ZM361.407 28.9385C361.033 26.4482 360.13 24.5928 358.697 23.3721C357.265 22.1514 355.499 21.541 353.399 21.541C352.325 21.541 351.332 21.7201 350.421 22.0781C349.509 22.4199 348.704 22.9163 348.004 23.5674C347.304 24.2184 346.718 25.0078 346.246 25.9355C345.774 26.847 345.473 27.848 345.343 28.9385H361.407Z"
                  fill="black"/>
        </svg>

    </div>
    <div class="header-buttons" id="navmenu">
        <nav>
            <a href="" class="link">Связать с поддержкой</a>
        </nav>
        <button class="helpbutton headertext">
            <span>Получить приз</span>
            <svg width="26" height="26" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.9 7.93994L15.52 10.5599C16.29 11.3299 16.29 12.5899 15.52 13.3599L9 19.8699" stroke="black"
                      stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M9 4.04004L10.04 5.08004" stroke="black" stroke-width="1.5" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
    </div>
    <div id="burger">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</header>

<main class="container">
    <div class="gridblock">
        <div class="wheel">
            <div class="lights">
                <span>
                <svg width="111" height="111" viewBox="0 0 111 111" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_f_1_6145)">
                        <circle cx="55.9284" cy="55.5338" r="35" transform="rotate(0.0551562 55.9284 55.5338)"
                                fill="#FCD535" fill-opacity="0.7"/>
                    </g>
                    <g filter="url(#filter1_f_1_6145)">
                        <circle cx="55.4279" cy="56.0333" r="22.5" transform="rotate(0.0551562 55.4279 56.0333)"
                                fill="white" fill-opacity="0.7"/>
                    </g>
                    <circle cx="55.4356" cy="48.0334" r="12.5" transform="rotate(0.0551562 55.4356 48.0334)"
                            fill="#FFF5CE" fill-opacity="0.5"/>
                    <circle cx="55.4279" cy="56.0334" r="12.5" transform="rotate(0.0551562 55.4279 56.0334)"
                            fill="white" fill-opacity="0.7"/>
                    <defs>
                        <filter id="filter0_f_1_6145" x="0.928406" y="0.533844" width="110" height="110"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_1_6145"/>
                        </filter>
                        <filter id="filter1_f_1_6145" x="12.9279" y="13.5333" width="85" height="85"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_1_6145"/>
                        </filter>
                    </defs>
                </svg>
                </span>
                <span>
                <svg width="111" height="111" viewBox="0 0 111 111" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_f_1_6145)">
                        <circle cx="55.9284" cy="55.5338" r="35" transform="rotate(0.0551562 55.9284 55.5338)"
                                fill="#FCD535" fill-opacity="0.7"/>
                    </g>
                    <g filter="url(#filter1_f_1_6145)">
                        <circle cx="55.4279" cy="56.0333" r="22.5" transform="rotate(0.0551562 55.4279 56.0333)"
                                fill="white" fill-opacity="0.7"/>
                    </g>
                    <circle cx="55.4356" cy="48.0334" r="12.5" transform="rotate(0.0551562 55.4356 48.0334)"
                            fill="#FFF5CE" fill-opacity="0.5"/>
                    <circle cx="55.4279" cy="56.0334" r="12.5" transform="rotate(0.0551562 55.4279 56.0334)"
                            fill="white" fill-opacity="0.7"/>
                    <defs>
                        <filter id="filter0_f_1_6145" x="0.928406" y="0.533844" width="110" height="110"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_1_6145"/>
                        </filter>
                        <filter id="filter1_f_1_6145" x="12.9279" y="13.5333" width="85" height="85"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_1_6145"/>
                        </filter>
                    </defs>
                </svg>
                </span>
                <span>
                <svg width="111" height="111" viewBox="0 0 111 111" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_f_1_6145)">
                        <circle cx="55.9284" cy="55.5338" r="35" transform="rotate(0.0551562 55.9284 55.5338)"
                                fill="#FCD535" fill-opacity="0.7"/>
                    </g>
                    <g filter="url(#filter1_f_1_6145)">
                        <circle cx="55.4279" cy="56.0333" r="22.5" transform="rotate(0.0551562 55.4279 56.0333)"
                                fill="white" fill-opacity="0.7"/>
                    </g>
                    <circle cx="55.4356" cy="48.0334" r="12.5" transform="rotate(0.0551562 55.4356 48.0334)"
                            fill="#FFF5CE" fill-opacity="0.5"/>
                    <circle cx="55.4279" cy="56.0334" r="12.5" transform="rotate(0.0551562 55.4279 56.0334)"
                            fill="white" fill-opacity="0.7"/>
                    <defs>
                        <filter id="filter0_f_1_6145" x="0.928406" y="0.533844" width="110" height="110"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_1_6145"/>
                        </filter>
                        <filter id="filter1_f_1_6145" x="12.9279" y="13.5333" width="85" height="85"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_1_6145"/>
                        </filter>
                    </defs>
                </svg>
                </span>
                <span>
                <svg width="111" height="111" viewBox="0 0 111 111" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_f_1_6145)">
                        <circle cx="55.9284" cy="55.5338" r="35" transform="rotate(0.0551562 55.9284 55.5338)"
                                fill="#FCD535" fill-opacity="0.7"/>
                    </g>
                    <g filter="url(#filter1_f_1_6145)">
                        <circle cx="55.4279" cy="56.0333" r="22.5" transform="rotate(0.0551562 55.4279 56.0333)"
                                fill="white" fill-opacity="0.7"/>
                    </g>
                    <circle cx="55.4356" cy="48.0334" r="12.5" transform="rotate(0.0551562 55.4356 48.0334)"
                            fill="#FFF5CE" fill-opacity="0.5"/>
                    <circle cx="55.4279" cy="56.0334" r="12.5" transform="rotate(0.0551562 55.4279 56.0334)"
                            fill="white" fill-opacity="0.7"/>
                    <defs>
                        <filter id="filter0_f_1_6145" x="0.928406" y="0.533844" width="110" height="110"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_1_6145"/>
                        </filter>
                        <filter id="filter1_f_1_6145" x="12.9279" y="13.5333" width="85" height="85"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_1_6145"/>
                        </filter>
                    </defs>
                </svg>
                </span>
                <span>
                <svg width="111" height="111" viewBox="0 0 111 111" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_f_1_6145)">
                        <circle cx="55.9284" cy="55.5338" r="35" transform="rotate(0.0551562 55.9284 55.5338)"
                                fill="#FCD535" fill-opacity="0.7"/>
                    </g>
                    <g filter="url(#filter1_f_1_6145)">
                        <circle cx="55.4279" cy="56.0333" r="22.5" transform="rotate(0.0551562 55.4279 56.0333)"
                                fill="white" fill-opacity="0.7"/>
                    </g>
                    <circle cx="55.4356" cy="48.0334" r="12.5" transform="rotate(0.0551562 55.4356 48.0334)"
                            fill="#FFF5CE" fill-opacity="0.5"/>
                    <circle cx="55.4279" cy="56.0334" r="12.5" transform="rotate(0.0551562 55.4279 56.0334)"
                            fill="white" fill-opacity="0.7"/>
                    <defs>
                        <filter id="filter0_f_1_6145" x="0.928406" y="0.533844" width="110" height="110"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_1_6145"/>
                        </filter>
                        <filter id="filter1_f_1_6145" x="12.9279" y="13.5333" width="85" height="85"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_1_6145"/>
                        </filter>
                    </defs>
                </svg>
                </span>
                <span>
                <svg width="111" height="111" viewBox="0 0 111 111" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_f_1_6145)">
                        <circle cx="55.9284" cy="55.5338" r="35" transform="rotate(0.0551562 55.9284 55.5338)"
                                fill="#FCD535" fill-opacity="0.7"/>
                    </g>
                    <g filter="url(#filter1_f_1_6145)">
                        <circle cx="55.4279" cy="56.0333" r="22.5" transform="rotate(0.0551562 55.4279 56.0333)"
                                fill="white" fill-opacity="0.7"/>
                    </g>
                    <circle cx="55.4356" cy="48.0334" r="12.5" transform="rotate(0.0551562 55.4356 48.0334)"
                            fill="#FFF5CE" fill-opacity="0.5"/>
                    <circle cx="55.4279" cy="56.0334" r="12.5" transform="rotate(0.0551562 55.4279 56.0334)"
                            fill="white" fill-opacity="0.7"/>
                    <defs>
                        <filter id="filter0_f_1_6145" x="0.928406" y="0.533844" width="110" height="110"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_1_6145"/>
                        </filter>
                        <filter id="filter1_f_1_6145" x="12.9279" y="13.5333" width="85" height="85"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_1_6145"/>
                        </filter>
                    </defs>
                </svg>
                </span>
                <span>
                <svg width="111" height="111" viewBox="0 0 111 111" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_f_1_6145)">
                        <circle cx="55.9284" cy="55.5338" r="35" transform="rotate(0.0551562 55.9284 55.5338)"
                                fill="#FCD535" fill-opacity="0.7"/>
                    </g>
                    <g filter="url(#filter1_f_1_6145)">
                        <circle cx="55.4279" cy="56.0333" r="22.5" transform="rotate(0.0551562 55.4279 56.0333)"
                                fill="white" fill-opacity="0.7"/>
                    </g>
                    <circle cx="55.4356" cy="48.0334" r="12.5" transform="rotate(0.0551562 55.4356 48.0334)"
                            fill="#FFF5CE" fill-opacity="0.5"/>
                    <circle cx="55.4279" cy="56.0334" r="12.5" transform="rotate(0.0551562 55.4279 56.0334)"
                            fill="white" fill-opacity="0.7"/>
                    <defs>
                        <filter id="filter0_f_1_6145" x="0.928406" y="0.533844" width="110" height="110"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_1_6145"/>
                        </filter>
                        <filter id="filter1_f_1_6145" x="12.9279" y="13.5333" width="85" height="85"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_1_6145"/>
                        </filter>
                    </defs>
                </svg>
                </span>
                <span>
                <svg width="111" height="111" viewBox="0 0 111 111" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_f_1_6145)">
                        <circle cx="55.9284" cy="55.5338" r="35" transform="rotate(0.0551562 55.9284 55.5338)"
                                fill="#FCD535" fill-opacity="0.7"/>
                    </g>
                    <g filter="url(#filter1_f_1_6145)">
                        <circle cx="55.4279" cy="56.0333" r="22.5" transform="rotate(0.0551562 55.4279 56.0333)"
                                fill="white" fill-opacity="0.7"/>
                    </g>
                    <circle cx="55.4356" cy="48.0334" r="12.5" transform="rotate(0.0551562 55.4356 48.0334)"
                            fill="#FFF5CE" fill-opacity="0.5"/>
                    <circle cx="55.4279" cy="56.0334" r="12.5" transform="rotate(0.0551562 55.4279 56.0334)"
                            fill="white" fill-opacity="0.7"/>
                    <defs>
                        <filter id="filter0_f_1_6145" x="0.928406" y="0.533844" width="110" height="110"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_1_6145"/>
                        </filter>
                        <filter id="filter1_f_1_6145" x="12.9279" y="13.5333" width="85" height="85"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_1_6145"/>
                        </filter>
                    </defs>
                </svg>
                </span>
                <span>
                <svg width="111" height="111" viewBox="0 0 111 111" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_f_1_6145)">
                        <circle cx="55.9284" cy="55.5338" r="35" transform="rotate(0.0551562 55.9284 55.5338)"
                                fill="#FCD535" fill-opacity="0.7"/>
                    </g>
                    <g filter="url(#filter1_f_1_6145)">
                        <circle cx="55.4279" cy="56.0333" r="22.5" transform="rotate(0.0551562 55.4279 56.0333)"
                                fill="white" fill-opacity="0.7"/>
                    </g>
                    <circle cx="55.4356" cy="48.0334" r="12.5" transform="rotate(0.0551562 55.4356 48.0334)"
                            fill="#FFF5CE" fill-opacity="0.5"/>
                    <circle cx="55.4279" cy="56.0334" r="12.5" transform="rotate(0.0551562 55.4279 56.0334)"
                            fill="white" fill-opacity="0.7"/>
                    <defs>
                        <filter id="filter0_f_1_6145" x="0.928406" y="0.533844" width="110" height="110"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_1_6145"/>
                        </filter>
                        <filter id="filter1_f_1_6145" x="12.9279" y="13.5333" width="85" height="85"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_1_6145"/>
                        </filter>
                    </defs>
                </svg>
                </span>
                <span>
                <svg width="111" height="111" viewBox="0 0 111 111" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_f_1_6145)">
                        <circle cx="55.9284" cy="55.5338" r="35" transform="rotate(0.0551562 55.9284 55.5338)"
                                fill="#FCD535" fill-opacity="0.7"/>
                    </g>
                    <g filter="url(#filter1_f_1_6145)">
                        <circle cx="55.4279" cy="56.0333" r="22.5" transform="rotate(0.0551562 55.4279 56.0333)"
                                fill="white" fill-opacity="0.7"/>
                    </g>
                    <circle cx="55.4356" cy="48.0334" r="12.5" transform="rotate(0.0551562 55.4356 48.0334)"
                            fill="#FFF5CE" fill-opacity="0.5"/>
                    <circle cx="55.4279" cy="56.0334" r="12.5" transform="rotate(0.0551562 55.4279 56.0334)"
                            fill="white" fill-opacity="0.7"/>
                    <defs>
                        <filter id="filter0_f_1_6145" x="0.928406" y="0.533844" width="110" height="110"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_1_6145"/>
                        </filter>
                        <filter id="filter1_f_1_6145" x="12.9279" y="13.5333" width="85" height="85"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_1_6145"/>
                        </filter>
                    </defs>
                </svg>
                </span>
                <span>
                <svg width="111" height="111" viewBox="0 0 111 111" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_f_1_6145)">
                        <circle cx="55.9284" cy="55.5338" r="35" transform="rotate(0.0551562 55.9284 55.5338)"
                                fill="#FCD535" fill-opacity="0.7"/>
                    </g>
                    <g filter="url(#filter1_f_1_6145)">
                        <circle cx="55.4279" cy="56.0333" r="22.5" transform="rotate(0.0551562 55.4279 56.0333)"
                                fill="white" fill-opacity="0.7"/>
                    </g>
                    <circle cx="55.4356" cy="48.0334" r="12.5" transform="rotate(0.0551562 55.4356 48.0334)"
                            fill="#FFF5CE" fill-opacity="0.5"/>
                    <circle cx="55.4279" cy="56.0334" r="12.5" transform="rotate(0.0551562 55.4279 56.0334)"
                            fill="white" fill-opacity="0.7"/>
                    <defs>
                        <filter id="filter0_f_1_6145" x="0.928406" y="0.533844" width="110" height="110"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_1_6145"/>
                        </filter>
                        <filter id="filter1_f_1_6145" x="12.9279" y="13.5333" width="85" height="85"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_1_6145"/>
                        </filter>
                    </defs>
                </svg>
                </span>
                <span>
                <svg width="111" height="111" viewBox="0 0 111 111" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_f_1_6145)">
                        <circle cx="55.9284" cy="55.5338" r="35" transform="rotate(0.0551562 55.9284 55.5338)"
                                fill="#FCD535" fill-opacity="0.7"/>
                    </g>
                    <g filter="url(#filter1_f_1_6145)">
                        <circle cx="55.4279" cy="56.0333" r="22.5" transform="rotate(0.0551562 55.4279 56.0333)"
                                fill="white" fill-opacity="0.7"/>
                    </g>
                    <circle cx="55.4356" cy="48.0334" r="12.5" transform="rotate(0.0551562 55.4356 48.0334)"
                            fill="#FFF5CE" fill-opacity="0.5"/>
                    <circle cx="55.4279" cy="56.0334" r="12.5" transform="rotate(0.0551562 55.4279 56.0334)"
                            fill="white" fill-opacity="0.7"/>
                    <defs>
                        <filter id="filter0_f_1_6145" x="0.928406" y="0.533844" width="110" height="110"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_1_6145"/>
                        </filter>
                        <filter id="filter1_f_1_6145" x="12.9279" y="13.5333" width="85" height="85"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_1_6145"/>
                        </filter>
                    </defs>
                </svg>
                </span>
                <span>
                <svg width="111" height="111" viewBox="0 0 111 111" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_f_1_6145)">
                        <circle cx="55.9284" cy="55.5338" r="35" transform="rotate(0.0551562 55.9284 55.5338)"
                                fill="#FCD535" fill-opacity="0.7"/>
                    </g>
                    <g filter="url(#filter1_f_1_6145)">
                        <circle cx="55.4279" cy="56.0333" r="22.5" transform="rotate(0.0551562 55.4279 56.0333)"
                                fill="white" fill-opacity="0.7"/>
                    </g>
                    <circle cx="55.4356" cy="48.0334" r="12.5" transform="rotate(0.0551562 55.4356 48.0334)"
                            fill="#FFF5CE" fill-opacity="0.5"/>
                    <circle cx="55.4279" cy="56.0334" r="12.5" transform="rotate(0.0551562 55.4279 56.0334)"
                            fill="white" fill-opacity="0.7"/>
                    <defs>
                        <filter id="filter0_f_1_6145" x="0.928406" y="0.533844" width="110" height="110"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_1_6145"/>
                        </filter>
                        <filter id="filter1_f_1_6145" x="12.9279" y="13.5333" width="85" height="85"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_1_6145"/>
                        </filter>
                    </defs>
                </svg>
                </span>
                <span>
                <svg width="111" height="111" viewBox="0 0 111 111" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_f_1_6145)">
                        <circle cx="55.9284" cy="55.5338" r="35" transform="rotate(0.0551562 55.9284 55.5338)"
                                fill="#FCD535" fill-opacity="0.7"/>
                    </g>
                    <g filter="url(#filter1_f_1_6145)">
                        <circle cx="55.4279" cy="56.0333" r="22.5" transform="rotate(0.0551562 55.4279 56.0333)"
                                fill="white" fill-opacity="0.7"/>
                    </g>
                    <circle cx="55.4356" cy="48.0334" r="12.5" transform="rotate(0.0551562 55.4356 48.0334)"
                            fill="#FFF5CE" fill-opacity="0.5"/>
                    <circle cx="55.4279" cy="56.0334" r="12.5" transform="rotate(0.0551562 55.4279 56.0334)"
                            fill="white" fill-opacity="0.7"/>
                    <defs>
                        <filter id="filter0_f_1_6145" x="0.928406" y="0.533844" width="110" height="110"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_1_6145"/>
                        </filter>
                        <filter id="filter1_f_1_6145" x="12.9279" y="13.5333" width="85" height="85"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_1_6145"/>
                        </filter>
                    </defs>
                </svg>
                </span>
                <span>
                <svg width="111" height="111" viewBox="0 0 111 111" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_f_1_6145)">
                        <circle cx="55.9284" cy="55.5338" r="35" transform="rotate(0.0551562 55.9284 55.5338)"
                                fill="#FCD535" fill-opacity="0.7"/>
                    </g>
                    <g filter="url(#filter1_f_1_6145)">
                        <circle cx="55.4279" cy="56.0333" r="22.5" transform="rotate(0.0551562 55.4279 56.0333)"
                                fill="white" fill-opacity="0.7"/>
                    </g>
                    <circle cx="55.4356" cy="48.0334" r="12.5" transform="rotate(0.0551562 55.4356 48.0334)"
                            fill="#FFF5CE" fill-opacity="0.5"/>
                    <circle cx="55.4279" cy="56.0334" r="12.5" transform="rotate(0.0551562 55.4279 56.0334)"
                            fill="white" fill-opacity="0.7"/>
                    <defs>
                        <filter id="filter0_f_1_6145" x="0.928406" y="0.533844" width="110" height="110"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_1_6145"/>
                        </filter>
                        <filter id="filter1_f_1_6145" x="12.9279" y="13.5333" width="85" height="85"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_1_6145"/>
                        </filter>
                    </defs>
                </svg>
                </span> <span>
                <svg width="111" height="111" viewBox="0 0 111 111" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_f_1_6145)">
                        <circle cx="55.9284" cy="55.5338" r="35" transform="rotate(0.0551562 55.9284 55.5338)"
                                fill="#FCD535" fill-opacity="0.7"/>
                    </g>
                    <g filter="url(#filter1_f_1_6145)">
                        <circle cx="55.4279" cy="56.0333" r="22.5" transform="rotate(0.0551562 55.4279 56.0333)"
                                fill="white" fill-opacity="0.7"/>
                    </g>
                    <circle cx="55.4356" cy="48.0334" r="12.5" transform="rotate(0.0551562 55.4356 48.0334)"
                            fill="#FFF5CE" fill-opacity="0.5"/>
                    <circle cx="55.4279" cy="56.0334" r="12.5" transform="rotate(0.0551562 55.4279 56.0334)"
                            fill="white" fill-opacity="0.7"/>
                    <defs>
                        <filter id="filter0_f_1_6145" x="0.928406" y="0.533844" width="110" height="110"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_1_6145"/>
                        </filter>
                        <filter id="filter1_f_1_6145" x="12.9279" y="13.5333" width="85" height="85"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                            <feGaussianBlur stdDeviation="10" result="effect1_foregroundBlur_1_6145"/>
                        </filter>
                    </defs>
                </svg>
                </span>

            </div>
            <div id="wheel" class="rgb-border">
                <div class="wheel-item" data-prize-id="">
                    <h3>IPHONE</h3>
                    <h1>14</h1>
                    <!--                    <img src="./img/fortune/iphone14.png" alt="">-->
                </div>
                <div class="wheel-item" data-prize-id="">
                    <h3>IPHONE</h3>
                    <h1>14</h1>
                    <!--                    <img src="./img/fortune/iphone14.png" alt="">-->
                </div>
                <div class="wheel-item" data-prize-id="">
                    <h3>IPHONE</h3>
                    <h1>14</h1>
                    <!--                    <img src="./img/fortune/iphone14.png" alt="">-->
                </div>
                <div class="wheel-item" data-prize-id="">
                    <h3>IPHONE</h3>
                    <h1>14</h1>
                    <!--                    <img src="./img/fortune/iphone14.png" alt="">-->
                </div>
                <div class="wheel-item" data-prize-id="">
                    <h3>IPHONE</h3>
                    <h1>14</h1>
                    <!--                    <img src="./img/fortune/iphone14.png" alt="">-->
                </div>
                <div class="wheel-item" data-prize-id="">
                    <h3>IPHONE</h3>
                    <h1>14</h1>
                    <!--                    <img src="./img/fortune/iphone14.png" alt="">-->
                </div>
                <div class="wheel-item" data-prize-id="">
                    <h3>IPHONE</h3>
                    <h1>14</h1>
                    <!--                    <img src="./img/fortune/iphone14.png" alt="">-->
                </div>
                <div class="wheel-item" data-prize-id="">
                    <h3>IPHONE</h3>
                    <h1>14</h1>
                    <!--                    <img src="./img/fortune/iphone14.png" alt="">-->
                </div>
                <div class="wheel-item" data-prize-id="">
                    <h3>IPHONE</h3>
                    <h1>14</h1>
                    <!--                    <img src="./img/fortune/iphone14.png" alt="">-->
                </div>
                <div class="wheel-item" data-prize-id="">
                    <h3>IPHONE</h3>
                    <h1>14</h1>
                    <!--                    <img src="./img/fortune/iphone14.png" alt="">-->
                </div>
                <div class="wheel-item" data-prize-id="">
                    <h3>IPHONE</h3>
                    <h1>14</h1>
                    <!--                    <img src="./img/fortune/iphone14.png" alt="">-->
                </div>
                <div class="wheel-item" data-prize-id="">
                    <h3>IPHONE</h3>
                    <h1>14</h1>
                    <!--                    <img src="./img/fortune/iphone14.png" alt="">-->
                </div>
                <div class="wheel-item" data-prize-id="">
                    <h3>IPHONE</h3>
                    <h1>14</h1>
                    <!--                    <img src="./img/fortune/iphone14.png" alt="">-->
                </div>
                <div class="wheel-item" data-prize-id="">
                    <h3>IPHONE</h3>
                    <h1>14</h1>
                    <!--                    <img src="./img/fortune/iphone14.png" alt="">-->
                </div>
                <div class="wheel-item" data-prize-id="">
                    <h3>IPHONE</h3>
                    <h1>14</h1>
                    <!--                    <img src="./img/fortune/iphone14.png" alt="">-->
                </div>
                <div class="wheel-item" data-prize-id="">
                    <h3>IPHONE</h3>
                    <h1>14</h1>
                    <!--                    <img src="./img/fortune/iphone14.png" alt="">-->
                </div>
            </div>
            <svg id="arrow" width="201" height="245" viewBox="0 0 201 245" fill="none"
                 xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_i_1_6120)">
                    <path d="M97.9619 5.03515C99.1166 3.03515 102.003 3.03516 103.158 5.03516L149.923 86.0352C151.078 88.0352 149.635 90.5352 147.325 90.5352H53.7946C51.4852 90.5352 50.0418 88.0352 51.1965 86.0352L97.9619 5.03515Z"
                          fill="#FCD535"/>
                </g>
                <path d="M97.9619 5.03515C99.1166 3.03515 102.003 3.03516 103.158 5.03516L149.923 86.0352C151.078 88.0352 149.635 90.5352 147.325 90.5352H53.7946C51.4852 90.5352 50.0418 88.0352 51.1965 86.0352L97.9619 5.03515Z"
                      stroke="url(#paint0_linear_1_6120)" stroke-width="3"/>
                <g filter="url(#filter1_d_1_6120)">
                    <ellipse cx="100.993" cy="140.277" rx="85" ry="85.5" fill="#FCD535"/>
                </g>
                <g filter="url(#filter2_f_1_6120)">
                    <path d="M167.993 140.277C167.993 177.557 137.772 207.777 100.493 207.777C63.2133 207.777 32.9926 177.557 32.9926 140.277C32.9926 102.998 63.2133 72.7773 100.493 72.7773C137.772 72.7773 167.993 102.998 167.993 140.277ZM34.0841 140.277C34.0841 176.954 63.8162 206.686 100.493 206.686C137.169 206.686 166.901 176.954 166.901 140.277C166.901 103.601 137.169 73.8689 100.493 73.8689C63.8162 73.8689 34.0841 103.601 34.0841 140.277Z"
                          fill="black" fill-opacity="0.7"/>
                </g>
                <mask id="path-4-inside-1_1_6120" fill="white">
                    <path d="M185.993 140.277C185.993 187.498 147.937 225.777 100.993 225.777C54.0484 225.777 15.9926 187.498 15.9926 140.277C15.9926 93.057 54.0484 54.7773 100.993 54.7773C147.937 54.7773 185.993 93.057 185.993 140.277ZM32.7409 140.277C32.7409 178.193 63.2982 208.931 100.993 208.931C138.687 208.931 169.244 178.193 169.244 140.277C169.244 102.361 138.687 71.6242 100.993 71.6242C63.2982 71.6242 32.7409 102.361 32.7409 140.277Z"/>
                </mask>
                <path d="M185.993 140.277C185.993 187.498 147.937 225.777 100.993 225.777C54.0484 225.777 15.9926 187.498 15.9926 140.277C15.9926 93.057 54.0484 54.7773 100.993 54.7773C147.937 54.7773 185.993 93.057 185.993 140.277ZM32.7409 140.277C32.7409 178.193 63.2982 208.931 100.993 208.931C138.687 208.931 169.244 178.193 169.244 140.277C169.244 102.361 138.687 71.6242 100.993 71.6242C63.2982 71.6242 32.7409 102.361 32.7409 140.277Z"
                      fill="url(#paint1_linear_1_6120)" stroke="#FFEFAE" stroke-width="0.8"
                      mask="url(#path-4-inside-1_1_6120)"/>
                <g filter="url(#filter3_i_1_6120)">
                    <path d="M98.79 87.1949C99.8148 84.7311 103.305 84.7311 104.33 87.1949L116.726 117C117.158 118.039 118.135 118.748 119.257 118.838L151.434 121.418C154.093 121.631 155.172 124.951 153.145 126.687L128.63 147.687C127.776 148.418 127.403 149.567 127.664 150.661L135.153 182.06C135.773 184.656 132.949 186.707 130.672 185.316L103.124 168.49C102.164 167.904 100.956 167.904 99.9962 168.49L72.4483 185.316C70.171 186.707 67.3472 184.656 67.9664 182.06L75.4562 150.661C75.7173 149.567 75.3442 148.418 74.4898 147.687L49.9744 126.687C47.9478 124.951 49.0264 121.631 51.6863 121.418L83.8632 118.838C84.9846 118.748 85.9614 118.039 86.3934 117L98.79 87.1949Z"
                          fill="url(#paint2_linear_1_6120)" fill-opacity="0.6"/>
                </g>
                <path d="M98.8361 87.2141C99.8438 84.7913 103.276 84.7913 104.284 87.2141L116.68 117.019C117.119 118.075 118.113 118.797 119.253 118.888L151.43 121.468C154.045 121.677 155.106 124.941 153.113 126.649L128.598 147.649C127.729 148.393 127.35 149.56 127.615 150.673L135.105 182.072C135.714 184.624 132.937 186.642 130.698 185.274L103.15 168.448C102.174 167.851 100.946 167.851 99.9701 168.448L72.4222 185.274C70.1829 186.642 67.4062 184.624 68.015 182.072L75.5049 150.673C75.7703 149.56 75.3909 148.393 74.5223 147.649L50.0069 126.649C48.0141 124.941 49.0747 121.677 51.6903 121.468L83.8672 118.888C85.0073 118.797 86.0004 118.075 86.4396 117.019L98.8361 87.2141Z"
                      stroke="white" stroke-opacity="0.7" stroke-width="0.1"/>
                <defs>
                    <filter id="filter0_i_1_6120" x="49.2878" y="2.03516" width="104.544" height="92"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                       result="hardAlpha"/>
                        <feOffset dx="2" dy="2"/>
                        <feGaussianBlur stdDeviation="2"/>
                        <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                        <feBlend mode="normal" in2="shape" result="effect1_innerShadow_1_6120"/>
                    </filter>
                    <filter id="filter1_d_1_6120" x="0.992554" y="43.7773" width="200" height="201"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                       result="hardAlpha"/>
                        <feOffset dy="4"/>
                        <feGaussianBlur stdDeviation="7.5"/>
                        <feComposite in2="hardAlpha" operator="out"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.5 0"/>
                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_1_6120"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1_6120" result="shape"/>
                    </filter>
                    <filter id="filter2_f_1_6120" x="27.9926" y="67.7773" width="145" height="145"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                        <feGaussianBlur stdDeviation="2.5" result="effect1_foregroundBlur_1_6120"/>
                    </filter>
                    <filter id="filter3_i_1_6120" x="48.9218" y="85.347" width="107.276" height="102.419"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                       result="hardAlpha"/>
                        <feOffset dx="2" dy="2"/>
                        <feGaussianBlur stdDeviation="2"/>
                        <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
                        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0"/>
                        <feBlend mode="normal" in2="shape" result="effect1_innerShadow_1_6120"/>
                    </filter>
                    <linearGradient id="paint0_linear_1_6120" x1="82.5599" y1="0.535157" x2="100.56" y2="120.535"
                                    gradientUnits="userSpaceOnUse">
                        <stop stop-color="#E1701D"/>
                        <stop offset="0.40625" stop-color="#A54B0A"/>
                        <stop offset="0.661458" stop-color="#FCD535"/>
                        <stop offset="1" stop-color="#E1701D"/>
                    </linearGradient>
                    <linearGradient id="paint1_linear_1_6120" x1="24.5599" y1="103.535" x2="185.647" y2="189.372"
                                    gradientUnits="userSpaceOnUse">
                        <stop stop-color="#A54B0A"/>
                        <stop offset="0.40625" stop-color="#E8BF17"/>
                        <stop offset="0.682292" stop-color="#E1701D"/>
                        <stop offset="1" stop-color="#A54B0A"/>
                    </linearGradient>
                    <linearGradient id="paint2_linear_1_6120" x1="81.5599" y1="105.535" x2="132.56" y2="181.535"
                                    gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FCD535"/>
                        <stop offset="0.276204" stop-color="#E1701D" stop-opacity="0.7"/>
                        <stop offset="0.678691" stop-color="#A54B0A" stop-opacity="0.7"/>
                        <stop offset="1" stop-color="#FCD535"/>
                    </linearGradient>
                </defs>
            </svg>
        </div>
        <div class="texts">
            <h1 class="maintext">Раскрути колесо удачи! </h1>
            <div>

                <p class="secondtext">Как получить КОД?
                    <a href="">
                        <span>Подробнее </span>
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.9 7.93994L15.52 10.5599C16.29 11.3299 16.29 12.5899 15.52 13.3599L9 19.8699"
                                  stroke="black"
                                  stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path d="M9 4.04004L10.04 5.08004" stroke="black" stroke-width="1.5" stroke-miterlimit="10"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>

                </p>
                <div class="input">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.99957 12.5V14.375M9.99957 12.5C10.8625 12.5 11.5621 11.8004 11.5621 10.9375C11.5621 10.0746 10.8625 9.375 9.99957 9.375C9.13663 9.375 8.43707 10.0746 8.43707 10.9375C8.43707 11.8004 9.13663 12.5 9.99957 12.5ZM7.18707 6.875V4.0625C7.18707 3.31658 7.48339 2.60121 8.01084 2.07376C8.53828 1.54632 9.25365 1.25 9.99957 1.25C10.7455 1.25 11.4609 1.54632 11.9883 2.07376C12.5158 2.60121 12.8121 3.31658 12.8121 4.0625V6.875M3.74957 6.875H16.2496C16.5948 6.875 16.8746 7.15482 16.8746 7.5V16.25C16.8746 16.5952 16.5948 16.875 16.2496 16.875H3.74957C3.40439 16.875 3.12457 16.5952 3.12457 16.25V7.5C3.12457 7.15482 3.40439 6.875 3.74957 6.875Z"
                              stroke="#5E718D" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                    <input type="text" name="promo" placeholder="Password" id="promo">
                </div>
                <p class="secondtext">Что бы крутить колесо удачи введите КОД! </p>
            </div>

            <button type="submit" id="paybutton">Крутить колесо</button>
        </div>
    </div>
</main>


<script src="./js/lavalamp.js"></script>
<script src="./js/burger.js"></script>
<script src="./js/jquery.js"></script>
<script src="./js/fortune.js"></script>

</body>
</html>
