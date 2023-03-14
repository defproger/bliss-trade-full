<?php
$filename = basename($_SERVER['DOCUMENT_URI']);
$links = [
    [
        'href' => 'index.php',
        'svg' => '<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.875 11.25H13.125C11.0625 11.25 9.375 12.9375 9.375 15V18.75C9.375 20.8125 11.0625 22.5 13.125 22.5H16.875C18.9375 22.5 20.625 20.8125 20.625 18.75V15"
                          stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15 11.25V22.5" stroke="black" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round"/>
                    <path d="M9.375 16.875H20.625" stroke="black" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round"/>
                    <path d="M27.5 13.125C27.5 11.6125 26.4875 9.67502 25.25 8.81252L17.525 3.40002C15.775 2.17502 12.9625 2.23752 11.275 3.55002L4.5375 8.80002C3.4125 9.67502 2.5 11.5375 2.5 12.95V22.2125C2.5 25.1125 4.8625 27.4875 7.7625 27.4875H22.2375C25.1375 27.4875 27.5 25.1125 27.5 22.225V18.35"
                          stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>',
        'activesvg' => '<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.875 11.25H13.125C11.0625 11.25 9.375 12.9375 9.375 15V18.75C9.375 20.8125 11.0625 22.5 13.125 22.5H16.875C18.9375 22.5 20.625 20.8125 20.625 18.75V15"
                      stroke="#FCD535" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M15 11.25V22.5" stroke="#FCD535" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round"/>
                <path d="M9.375 16.875H20.625" stroke="#FCD535" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round"/>
                <path d="M27.5 13.125C27.5 11.6125 26.4875 9.67496 25.25 8.81246L17.525 3.39996C15.775 2.17496 12.9625 2.23746 11.275 3.54996L4.5375 8.79996C3.4125 9.67496 2.5 11.5375 2.5 12.95V22.2125C2.5 25.1125 4.8625 27.4875 7.7625 27.4875H22.2375C25.1375 27.4875 27.5 25.1125 27.5 22.225V18.35"
                      stroke="#FCD535" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>',
        'text' => 'Главная',
    ],
//    [
//        'href' => 'paylist.php',
//        'svg' => '<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
//                <path d="M3.125 17.5875V14.3875C3.125 11.8 5.2375 9.6875 7.825 9.6875H22.175C24.7625 9.6875 26.875 11.8 26.875 14.3875V16.1875H24.35C23.65 16.1875 23.0125 16.4625 22.55 16.9375C22.025 17.45 21.725 18.1875 21.8 18.975C21.9125 20.325 23.15 21.3125 24.5 21.3125H26.875V22.8C26.875 25.3875 24.7625 27.5 22.175 27.5H7.825C5.2375 27.5 3.125 25.3875 3.125 22.8"
//                      stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
//                <path d="M15.3496 2.71239C16.8996 2.12489 18.5621 3.27493 18.5621 4.93743V9.68741" stroke="black"
//                      stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
//                <path d="M3.125 15.5124V9.79996C3.125 8.31246 4.0375 6.9874 5.425 6.4624L10.3875 4.5874"
//                      stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
//                <path d="M28.2005 17.4624V20.0375C28.2005 20.725 27.6505 21.2875 26.9505 21.3125H24.5005C23.1505 21.3125 21.913 20.325 21.8005 18.975C21.7255 18.1875 22.0255 17.45 22.5505 16.9375C23.013 16.4625 23.6505 16.1875 24.3505 16.1875H26.9505C27.6505 16.2125 28.2005 16.7749 28.2005 17.4624Z"
//                      stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
//                <path d="M8.75 15H17.5" stroke="black" stroke-width="1.5" stroke-linecap="round"
//                      stroke-linejoin="round"/>
//            </svg>',
//        'activesvg' => '<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
//                    <path d="M3.125 17.5875V14.3875C3.125 11.8 5.2375 9.6875 7.825 9.6875H22.175C24.7625 9.6875 26.875 11.8 26.875 14.3875V16.1875H24.35C23.65 16.1875 23.0125 16.4625 22.55 16.9375C22.025 17.45 21.725 18.1875 21.8 18.975C21.9125 20.325 23.15 21.3125 24.5 21.3125H26.875V22.8C26.875 25.3875 24.7625 27.5 22.175 27.5H7.825C5.2375 27.5 3.125 25.3875 3.125 22.8"
//                          stroke="#FCD535" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
//                    <path d="M15.3496 2.71251C16.8996 2.12501 18.5621 3.27505 18.5621 4.93755V9.68754" stroke="#FCD535"
//                          stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
//                    <path d="M3.125 15.5125V9.80002C3.125 8.31252 4.0375 6.98746 5.425 6.46246L10.3875 4.58746"
//                          stroke="#FCD535" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
//                    <path d="M28.2005 17.4624V20.0375C28.2005 20.725 27.6505 21.2875 26.9505 21.3125H24.5005C23.1505 21.3125 21.913 20.325 21.8005 18.975C21.7255 18.1875 22.0255 17.45 22.5505 16.9375C23.013 16.4625 23.6505 16.1875 24.3505 16.1875H26.9505C27.6505 16.2125 28.2005 16.7749 28.2005 17.4624Z"
//                          stroke="#FCD535" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
//                    <path d="M8.75 15H17.5" stroke="#FCD535" stroke-width="2" stroke-linecap="round"
//                          stroke-linejoin="round"/>
//                </svg>',
//        'text' => 'Выписка',
//    ],
    [
        'href' => 'statistick.php',
        'svg' => '<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.4629 27.5H27.5004" stroke="black" stroke-width="1.5" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M2.5 2.5V23.75C2.5 25.825 4.175 27.5 6.25 27.5H17.475" stroke="black" stroke-width="1.5"
                      stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M24.9883 10.225L26.2508 8.75" stroke="black" stroke-width="1.5" stroke-miterlimit="10"
                      stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M6.25 21.25L11.9875 14.55C12.9375 13.45 14.625 13.375 15.65 14.4125L16.8375 15.6C17.8625 16.625 19.55 16.5625 20.5 15.4625L21.9375 13.775"
                      stroke="black" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                      stroke-linejoin="round"/>
            </svg>',
        'activesvg' => '<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.4629 27.5H27.5004" stroke="#FCD535" stroke-width="2" stroke-miterlimit="10"
                          stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M2.5 2.5V23.75C2.5 25.825 4.175 27.5 6.25 27.5H17.475" stroke="#FCD535" stroke-width="2"
                          stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M24.9883 10.225L26.2508 8.75" stroke="#FCD535" stroke-width="2" stroke-miterlimit="10"
                          stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M6.25 21.25L11.9875 14.55C12.9375 13.45 14.625 13.375 15.65 14.4125L16.8375 15.6C17.8625 16.625 19.55 16.5625 20.5 15.4625L21.9375 13.775"
                          stroke="#FCD535" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                          stroke-linejoin="round"/>
                </svg>',
        'text' => 'Статистика',
    ],
    [
        'href' => 'userpage.php',
        'svg' => ' <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.5 10C2.5 5 3.75 3.75 8.75 3.75H21.25C26.25 3.75 27.5 5 27.5 10V20C27.5 25 26.25 26.25 21.25 26.25H8.75C3.75 26.25 2.5 25 2.5 20V15.5"
                      stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M17.5 10H23.75" stroke="black" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round"/>
                <path d="M18.75 15H23.75" stroke="black" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round"/>
                <path d="M21.25 20H23.75" stroke="black" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round"/>
                <path d="M10.6258 14.1124C11.8753 14.1124 12.8883 13.0994 12.8883 11.8499C12.8883 10.6004 11.8753 9.5874 10.6258 9.5874C9.37624 9.5874 8.36328 10.6004 8.36328 11.8499C8.36328 13.0994 9.37624 14.1124 10.6258 14.1124Z"
                      stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M15 20.4125C14.825 18.6 13.3875 17.175 11.575 17.0125C10.95 16.95 10.3125 16.95 9.675 17.0125C7.8625 17.1875 6.425 18.6 6.25 20.4125"
                      stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>',
        'activesvg' => '<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.5 10C2.5 5 3.75 3.75 8.75 3.75H21.25C26.25 3.75 27.5 5 27.5 10V20C27.5 25 26.25 26.25 21.25 26.25H8.75C3.75 26.25 2.5 25 2.5 20V15.5"
                          stroke="#FCD535" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M17.5 10H23.75" stroke="#FCD535" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"/>
                    <path d="M18.75 15H23.75" stroke="#FCD535" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"/>
                    <path d="M21.25 20H23.75" stroke="#FCD535" stroke-width="2" stroke-linecap="round"
                          stroke-linejoin="round"/>
                    <path d="M10.6258 14.1125C11.8753 14.1125 12.8883 13.0996 12.8883 11.85C12.8883 10.6005 11.8753 9.58752 10.6258 9.58752C9.37624 9.58752 8.36328 10.6005 8.36328 11.85C8.36328 13.0996 9.37624 14.1125 10.6258 14.1125Z"
                          stroke="#FCD535" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15 20.4125C14.825 18.6 13.3875 17.175 11.575 17.0125C10.95 16.95 10.3125 16.95 9.675 17.0125C7.8625 17.1875 6.425 18.6 6.25 20.4125"
                          stroke="#FCD535" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>',
        'text' => 'Мой профиль',
    ],
    [
        'href' => 'referals.php',
        'svg' => '<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.599 4.95C20.199 5.8375 20.549 6.9 20.549 8.05C20.5365 11.05 18.174 13.4875 15.199 13.5875C15.074 13.575 14.924 13.575 14.7865 13.5875C12.024 13.5 9.78653 11.3875 9.48653 8.6875C9.12403 5.475 11.7615 2.5 14.9865 2.5"
                      stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8.7375 18.2C5.7125 20.225 5.7125 23.525 8.7375 25.5375C12.175 27.8375 17.8125 27.8375 21.25 25.5375C24.275 23.5125 24.275 20.2125 21.25 18.2C17.8375 15.9125 12.2 15.9125 8.7375 18.2Z"
                      stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>',
        'activesvg' => '<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.599 4.95C20.199 5.8375 20.549 6.9 20.549 8.05C20.5365 11.05 18.174 13.4875 15.199 13.5875C15.074 13.575 14.924 13.575 14.7865 13.5875C12.024 13.5 9.78653 11.3875 9.48653 8.6875C9.12403 5.475 11.7615 2.5 14.9865 2.5"
                          stroke="#FCD535" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M8.7375 18.2C5.7125 20.225 5.7125 23.525 8.7375 25.5375C12.175 27.8375 17.8125 27.8375 21.25 25.5375C24.275 23.5125 24.275 20.2125 21.25 18.2C17.8375 15.9125 12.2 15.9125 8.7375 18.2Z"
                          stroke="#FCD535" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>',
        'text' => 'Рефералы',
    ],
]
?>
<div class="header-buttons" id="navmenu">
    <nav>
        <?php foreach ($links as $link): ?>
            <a href="<?= $link['href'] ?>" class="link <?= $filename === $link['href'] ? 'active' : '' ?>">
                <?= $filename === $link['href'] ? $link['activesvg'] : $link['svg'] ?>
                <span><?= $link['text'] ?></span>
            </a>
        <?php endforeach; ?>
    </nav>
    <nav>
        <a href="../login.html" class="link" id="exitfromlkbtn">
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.96289 2.5V27.5" stroke="black" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round"/>
                <path d="M18.7117 11.8L15.5117 15L18.7117 18.2001" stroke="black" stroke-width="1.5"
                      stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M2.5 16.25V18.75C2.5 25 5 27.5 11.25 27.5H18.75C25 27.5 27.5 25 27.5 18.75V11.25C27.5 5 25 2.5 18.75 2.5H11.25C5 2.5 2.5 5 2.5 11.25"
                      stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Выход</span>
        </a>
    </nav>
</div>
