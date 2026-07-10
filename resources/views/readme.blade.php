<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Unlocked - Setup Guide</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            background: #f8fafc;
        }

        .readme-card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .08);
        }

        .brand {
            color: #FF2D20;
            font-weight: 700;
        }

        .readme-content h1,
        .readme-content h2,
        .readme-content h3 {
            margin-top: 1.75rem;
            margin-bottom: 1rem;
        }

        .readme-content h1:first-child {
            margin-top: 0;
        }

        .readme-content pre {
            background: #f1f5f9;
            border-radius: 10px;
            padding: 1rem;
            overflow-x: auto;
        }

        .readme-content code {
            color: #FF2D20;
        }

        .readme-content pre code {
            color: inherit;
        }

        .readme-content table {
            width: 100%;
            margin-bottom: 1rem;
        }

        .readme-content table,
        .readme-content th,
        .readme-content td {
            border: 1px solid #e2e8f0;
            border-collapse: collapse;
        }

        .readme-content th,
        .readme-content td {
            padding: .5rem .75rem;
        }

        .readme-content blockquote {
            border-left: 4px solid #FF2D20;
            padding-left: 1rem;
            color: #64748b;
        }

        .readme-content img {
            max-width: 100%;
        }
    </style>
</head>

<body>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="card readme-card">
                    <div class="card-body p-5 readme-content">
                        {!! $content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
