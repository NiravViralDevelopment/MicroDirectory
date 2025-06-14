<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account Created</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333333;
            margin: 0;
            padding: 0;
        }
        .container {
            background-color: #ffffff;
            max-width: 600px;
            margin: 30px auto;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border: 1px solid #ddd;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img {
            max-width: 150px;
        }
        h1 {
            color: #4CAF50;
            font-size: 24px;
            margin: 0;
        }
        p {
            font-size: 16px;
            line-height: 1.6;
            margin: 15px 0;
        }
        .link {
            color: #4CAF50;
            text-decoration: none;
            font-weight: bold;
        }
        .badge {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 4px;
            background-color: #28a745;
            color: #ffffff;
            font-size: 14px;
            margin-right: 5px;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 14px;
            color: #777777;
        }
        .footer a {
            color: #4CAF50;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <!-- You can add your company logo here -->
            <img src="{{ asset('public/front/assets/images/urja_media.jpg') }}" alt="Company Logo" width="100" height="auto">

        </div>
        <p>We are thrilled to welcome you to the Tattva Media creative community!</p>
        <p>Congratulations! Your account has been successfully created&mdash;and with it, you&#39;ve taken the first step into an exciting world of storytelling, scriptwriting, and filmmaking. Whether you&rsquo;re an aspiring author, a visual storyteller, or simply a lover of narratives, you now belong to a platform that celebrates creativity, nurtures talent, and turns ideas into cinematic magic.</p>
        <p> What You Can Look Forward To:</p>
        <ul>
	<li>Access to exclusive story writing, screenplay, and scriptwriting competitions<br />
	&nbsp;</li>
	<li>A vibrant community of storytellers and creators like yourself<br />
	&nbsp;</li>
	<li>Opportunities to learn from experts, revise your work, and grow with each submission<br />
	&nbsp;</li>
</ul>
<p>Why Do We Charge a One-Time Registration and Participation Fee?</p>
<p>At Tattva Media, we&rsquo;re committed to maintaining quality and providing genuine opportunities for growth. Here&rsquo;s how your fees help us&mdash;and you:</p>

<p>✅ One-Time Registration Fee (Non-Refundable, Lifetime Access)</p>

<ul>
	<li>Grants you access to a limited number of free online classes in story writing, scriptwriting, and screenplay writing<br />
	&nbsp;</li>
	<li>Unlocks special discounted participation fees for future competitions<br />
	&nbsp;</li>
	<li>Ensures your seat in a quality-driven and authentic creative environment<br />
	&nbsp;</li>
</ul>

<p>✅ Participation Fee Benefits</p>

<ul>
	<li>You can revise and re-upload your story up to 3 times per competition<br />
	&nbsp;</li>
    <li>If your story isn&#39;t accepted by the panel, you can enter the next competition free of cost until your story qualifies<br />
	&nbsp;</li>
	<li>Your work is reviewed by industry professionals, offering insights and mentorship<br />
	&nbsp;</li>
	<li>You receive access to expert-led workshops and storytelling resources to help you improve continuously<br />
	&nbsp;</li>
</ul>

<p> Why This Fee Matters</p>

<ul>
	<li>It encourages only serious participants, like you, to take part&mdash;reducing spam and ensuring meaningful competition<br />
	&nbsp;</li>
	<li>It supports a platform where you don&rsquo;t just compete&mdash;you learn, evolve, and get discovered<br />
	&nbsp;</li>
	<li>It empowers us to provide high-quality mentorship, valuable feedback, and real opportunities for your work to shine<br />
	&nbsp;</li>
</ul>

<p>We are excited to see your creativity take flight. Your stories matter, and we&rsquo;re here to help you shape them into something extraordinary.</p>

<p>We are excited to inform you that your account has been successfully created. Here are your account details:</p>

 <p><strong>Email:</strong> {{ $user->email }}</p>
        <p><strong>Password:</strong> {{ $user->show_password }}</p>
         <p><a href="{{asset('login')}}" class="link">Login to Your Account</a></p>
<p>&nbsp;</p>

<p><strong>Warm regards,</strong><br />
<strong>The Tattva Media Team</strong><br />
📩 register@tattvamedia.in<br />
🌐<a href="https://meghtattva.in/public/">meghtattva.in</a></p>



    </div>
</body>
</html>
