<!DOCTYPE html>
<html lang="en">

<head>
    <title>Porsche Indonesia - Linktree</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background-color: #bbbbbb;
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
        }
        
        .page-outer {
            padding: 3em 1em 2.5em;
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }
        
        .main-card {
            background: #fff;
            border-radius: 1.5rem;
            width: 100%;
            max-width: 42.5rem;
            padding: 3.75rem 1.5rem 7.5rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, .1);
            position: relative;
        }
        
        .card-nav-container {
            position: absolute;
            top: 1.25rem;
            left: 1.25rem;
            right: 1.25rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .nav-btn {
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 50%;
            background: #fff;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 1px 4px rgba(0, 0, 0, .1);
            transition: transform .1s;
        }
        
        .nav-btn svg {
            width: 1.125rem;
            height: 1.125rem;
        }
        
        .profile-avatar {
            width: 4.7rem;
            height: 4.7rem;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, .08);
            background: #fff;
        }
        
        .profile-name {
            color: #1a1a1a;
            font-size: 1.3rem;
            font-weight: 700;
            margin: .875rem 0 .125rem;
        }
        
        .profile-subtitle {
            color: #777;
            font-size: small;
            margin-bottom: 1.875rem;
        }
        
        .link-card {
            display: flex;
            align-items: center;
            background: #fff;
            border: 1px solid #e0e0e0;
            border-radius: .75rem;
            padding: .875rem 1.125rem;
            margin-bottom: .875rem;
            color: #333;
            text-decoration: none;
            transition: background .2s, transform .1s, box-shadow .2s;
        }
        
        .link-card:hover {
            background: #f7f7f7;
            color: #333;
            text-decoration: none;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, .05);
        }
        
        .link-icon {
            width: 2.75rem;
            height: 2.75rem;
            border-radius: .5rem;
            object-fit: cover;
            flex-shrink: 0;
        }
        
        .link-icon-placeholder {
            width: 2.75rem;
            height: 2.75rem;
            border-radius: .5rem;
            background: #f0f0f0;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: medium;
            color: #555;
        }
        
        .link-text {
            flex: 1;
            text-align: center;
            font-size: .95rem;
            font-weight: 600;
            padding: 0 .625rem;
        }
        
        .link-arrow {
            color: #555;
            font-size: medium;
            flex-shrink: 0;
        }
        
        .footer-text {
            color: #777;
            font-size: small;
            margin-top: 3.75rem;
            margin-bottom: 1.25rem;
        }
        
        .footer-text a {
            color: #555;
            text-decoration: none;
        }
        
        .footer-text a:hover {
            color: #1a1a1a;
        }
        
        .fixed-bottom-center {
            position: fixed;
            bottom: 1.25rem;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1050;
            width: 100%;
            max-width: 25rem;
            text-align: center;
        }
        
        #join-text {
            color: #fff;
            font-size: small;
            font-weight: 600;
            display: block;
            margin-top: .3125rem;
            text-shadow: 0 1px 3px rgba(0, 0, 0, .5);
        }
        
        .btn-white {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 50rem;
            padding: .625rem 1.5rem;
            color: #1a1a1a;
            font-weight: bold;
            display: inline-flex;
            align-items: center;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .1);
        }
        
        .btn-white .close {
            color: #1a1a1a;
            font-size: large;
            padding: 0;
            margin-left: .9375rem;
            background: none;
            border: none;
            opacity: .5;
            cursor: pointer;
        }
        
        .btn-white .close:hover {
            opacity: 1;
        }
    </style>
</head>

<body>

    <div class="page-outer">
        <div class="main-card">

            <div class="card-nav-container">
                <button class="nav-btn" title="Linktree">
                <svg viewBox="0 0 24 24" fill="none" stroke="#333" stroke-width="2.2" stroke-linecap="round">
                    <line x1="12" y1="2" x2="12" y2="22"/>
                    <line x1="2" y1="12" x2="22" y2="12"/>
                    <line x1="4.93" y1="4.93" x2="19.07" y2="19.07"/>
                    <line x1="19.07" y1="4.93" x2="4.93" y2="19.07"/>
                </svg>
            </button>
                <button class="nav-btn" title="Share">
                <svg viewBox="0 0 24 24" fill="none" stroke="#333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"/>
                    <polyline points="16 6 12 2 8 6"/>
                    <line x1="12" y1="2" x2="12" y2="15"/>
                </svg>
            </button>
            </div>

            <div class="profile-wrapper">

                <div class="text-center">
                    <img src="https://ugc.production.linktr.ee/4f7ad8a5-e7fc-48e1-80b8-2a7eda870680_Profile--S--White.png?io=true&size=avatar-v3_0" alt="Porsche Indonesia" class="profile-avatar">
                    <p class="profile-name">Porsche Indonesia</p>
                    <p class="profile-subtitle">Importer</p>
                </div>

                <a href="https://www.porsche.com/pap/_indonesia_/" class="link-card" target="_blank">
                    <img src="https://ugc.production.linktr.ee/cd772729-7185-4b1f-8de9-5b06bed49534_Icons-Linktree-01.png?io=true&size=thumbnail-stack_v1_0" class="link-icon" alt="Web">
                    <span class="link-text">Porsche Indonesia Website</span>
                    <span class="link-arrow">&#8942;</span>
                </a>

                <a href="https://finder.porsche.com/id/en-ID/search" class="link-card" target="_blank">
                    <img src="https://ugc.production.linktr.ee/681fe486-3df2-4933-84b9-7b982b87e9a8_Icons-Linktree-02.png?io=true&size=thumbnail-stack_v1_0" class="link-icon" alt="Finder">
                    <span class="link-text">Porsche Finder Indonesia</span>
                    <span class="link-arrow">&#8942;</span>
                </a>

                <a href="https://www.porsche.com/pap/_indonesia_/modelstart/all/" class="link-card" target="_blank">
                    <img src="https://ugc.production.linktr.ee/681fe486-3df2-4933-84b9-7b982b87e9a8_Icons-Linktree-02.png?io=true&size=thumbnail-stack_v1_0" class="link-icon" alt="Configurator">
                    <span class="link-text">Porsche Car Configurator Indonesia</span>
                    <span class="link-arrow">&#8942;</span>
                </a>

                <a href="https://www.tokopedia.com/porschecentrejkt" class="link-card" target="_blank">
                    <img src="https://ugc.production.linktr.ee/3fc895df-8ca5-4517-b5c9-6287c1092887_Icons-Linktree-03.png?io=true&size=thumbnail-stack_v1_0" class="link-icon" alt="Tokopedia">
                    <span class="link-text">Porsche Lifestyle Online Store</span>
                    <span class="link-arrow">&#8942;</span>
                </a>

                <a href="https://api.whatsapp.com/send?phone=6285974964911" class="link-card" target="_blank">
                    <img src="https://ugc.production.linktr.ee/0647c1bd-aad2-40b3-b47a-a592802b90e2_Icons-Linktree-12.png?io=true&size=thumbnail-stack_v1_0" class="link-icon" alt="WA">
                    <span class="link-text">Porsche Indonesia Whatsapp</span>
                    <span class="link-arrow">&#8942;</span>
                </a>

                <a href="https://www.instagram.com/porsche.indonesia/" class="link-card" target="_blank">
                    <img src="https://ugc.production.linktr.ee/6bcf157a-45f4-4c1f-ae3d-70e0214dc7a2_Icons-Linktree-09.png?io=true&size=thumbnail-stack_v1_0" class="link-icon" alt="Instagram">
                    <span class="link-text">Instagram - Porsche Indonesia</span>
                    <span class="link-arrow">&#8942;</span>
                </a>

                <a href="https://www.tiktok.com/@porsche.indonesia" class="link-card" target="_blank">
                    <img src="https://ugc.production.linktr.ee/563bc7a9-012d-4681-9f95-17dd0ff89d19_EurokarsGroup-Virtual-Background-01-16.png?io=true&size=thumbnail-stack_v1_0" class="link-icon" alt="TikTok">
                    <span class="link-text">TikTok - Porsche Indonesia</span>
                    <span class="link-arrow">&#8942;</span>
                </a>

                <div class="text-center footer-text">
                    <a href="#">Cookie Preferences</a> &bull; <a href="#">Report</a> &bull; <a href="#">Privacy</a> &bull; <a href="#">Explore</a>
                </div>

            </div>
        </div>
    </div>

    <div class="fixed-bottom-center d-flex flex-column align-items-center">
        <div class="btn btn-white shadow d-flex align-items-center rounded-pill px-4 py-2 border mb-2">
            <span class="text-dark font-weight-bold">linktr.ee/you</span>
            <button type="button" class="close ml-3" aria-label="Close" onclick="this.parentElement.parentElement.remove()">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <span id="join-text">Join porscheindonesia on Linktree today</span>
    </div>

</body>

</html>