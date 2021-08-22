@php

// require '../../vendor/autoload.php';

// Set your secret key. Remember to switch to your live secret key in production.
// See your keys here: https://dashboard.stripe.com/apikeys
\Stripe\Stripe::setApiKey('sk_test_51JOVVqLU2PCFol22XNi0r4DsuPop6ENqyn7UzHTVn4GB6AFSzlZfLJyKUQomBL9O1eiDPtN4D9iewQF33GYrKEks004SNmXksL');

// The price ID passed from the front end.
//   $priceId = $_POST['priceId'];
$priceId = $_POST['priceId'];

$checkout_session = \Stripe\Checkout\Session::create([
    // 'success_url' => 'http://127.0.0.1:8000/success/?session_id={CHECKOUT_SESSION_ID}',
    'success_url' => 'http://127.0.0.1:8000/success/?status=activo',
    // 'cancel_url' => 'http://localhost/stripe/canceled.php',

    // 'success_url' => "{{ route('success') }}",
    'cancel_url' => 'http://localhost/stripe/canceled.php',
    
    'payment_method_types' => ['card'],
    'mode' => 'subscription',
    'line_items' => [
        [
            'price' => $priceId,
            // For metered billing, do not pass quantity
            'quantity' => 1,
        ],
    ],
]);

// Redirect to the URL returned on the Checkout Session.
// With vanilla PHP, you can redirect with:
//   header("HTTP/1.1 303 See Other");
//   header("Location: " . $session->url);

@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Stripe</title>
    <script src="https://js.stripe.com/v3/"></script>
</head>

<body>
    <script>
        var stripe = Stripe(
            'pk_test_51JOVVqLU2PCFol22nYZDgLF2Slpjr16kvgwvDyVOxQBHRUxfdxA9cssi5NAA5WsYfT0xGCSczkTy0vYGmxRe8mt500KscXDZFw'
            );
        var session = "<?php echo $checkout_session['id']; ?>";
        stripe.redirectToCheckout({
                sessionId: session
            })
            .then(function(result) {
                // If `redirectToCheckout` fails due to a browser or network
                // error, you should display the localized error message to your
                // customer using `error.message`.
                if (result.error) {
                    alert(result.error.message);
                }
            })
            .catch(function(error) {
                console.error('Error:', error);
            });
    </script>
</body>

</html>
