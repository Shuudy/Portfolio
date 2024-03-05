<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            padding: 1em;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
            margin-bottom: 1em;
        }
        .mail-info {
            display: flex;
            align-items: center;
            gap: 1em;
        }

        .mail-info-icon {
            background-color: #f8f8f8;
            padding: 1em;
            border-radius: 13px;
        }

        .mail-info-container {
            display: flex;
            flex-direction: column;
            gap: 1.5em;
        }

        .mail-info-content {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .mail-info-subtitle {
            color: #8f8f8f;
        }

        .mail-message {
            margin-top: 2em;
            width: 100%;            
        }

        .mail-title {
            margin-bottom: 5px;
        }

        .mail-message-content {
            background-color: #f8f8f8;
            padding: 1em;
            border-radius: 13px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Demande de contact de <b>{{ $formData['name'] }}</b></h1>
        <div class="mail-info-container">
            <div class="mail-info">
                <div class="mail-info-icon">
                <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 10V7C20 5.89543 19.1046 5 18 5H6C4.89543 5 4 5.89543 4 7V10M20 10V19C20 20.1046 19.1046 21 18 21H6C4.89543 21 4 20.1046 4 19V10M20 10H4M8 3V7M16 3V7" stroke="#000000" stroke-width="2" stroke-linecap="round"/>
                    <rect x="6" y="12" width="3" height="3" rx="0.5" fill="#000000"/>
                    <rect x="10.5" y="12" width="3" height="3" rx="0.5" fill="#000000"/>
                    <rect x="15" y="12" width="3" height="3" rx="0.5" fill="#000000"/>
                </svg>
                </div>
                <div class="mail-info-content">
                    <div class="mail-info-title">Date</div>
                    <div class="mail-info-subtitle">{{ \Carbon\Carbon::now()->isoFormat('D MMM YYYY HH[:]mm') }}</div>
                </div>
            </div>
            <div class="mail-info">
                <div class="mail-info-icon">
                    <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 21C5 17.134 8.13401 14 12 14C15.866 14 19 17.134 19 21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="mail-info-content">
                    <div class="mail-info-title">{{ $formData['name'] }}</div>
                    <div class="mail-info-subtitle">{{ $formData['email'] }}</div>
                </div>
            </div>
            <div class="mail-info">
                <div class="mail-info-icon">
                    <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 10H16M8 14H16M21.0039 12C21.0039 16.9706 16.9745 21 12.0039 21C9.9675 21 3.00463 21 3.00463 21C3.00463 21 4.56382 17.2561 3.93982 16.0008C3.34076 14.7956 3.00391 13.4372 3.00391 12C3.00391 7.02944 7.03334 3 12.0039 3C16.9745 3 21.0039 7.02944 21.0039 12Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="mail-info-content">
                    <div class="mail-info-title">{{ $formData['object'] }}</div>
                    <div class="mail-info-subtitle">{{ Str::limit($formData['message'], 50) }}</div>
                </div>
            </div>
        </div>         
        <div class="mail-message">
            <div class="mail-title">Message</div>
            <div class="mail-message-content">{!! nl2br(e($formData['message'])) !!}</div>
        </div>
    </div>
</body>
</html>