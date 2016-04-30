# Nexmo plugin for OSTicket 

## Inspiration
I was hoping to contribute back to the open source community for this Nexmo contest. Hence, I was browsing through some of the more popular Softaculous projects and OSTicket which is popular customer support and ticketing app popped up. It was interesting because the common notion of customer service entails people tethered to their desks. Why not make responding to tickets mobile using Nexmo? Or perhaps provide VIP support to certain clients by responding to them even when it is not business hours.

## What it does
Configure the plugin by adding your Nexmo API Key, secret, Nexmo number as well as the number to send ticket notifications to.

You're all set.

## Challenges I ran into
OSTicket does not have formal support for plugins and documentation was poor. Short of changing the main framework code, there is limited configuration available for plugins, and even lesser public APIs exposed.

## How to run
Extract the files under <osticket>/include/plugins/<nexmo-plugin>. Go to the Staff Control Panel and it should be available for you to activate immediately.

## What's next for Nexmo for OSTicket
Figure out how to reply to support tickets without thrashing the private framework code. Doing this can make it work now, but may break when framework changes are made.

Integrate it formally into OSTicket - however, this should be platform agnostic. Support for other SMS services like Twilio other than Nexmo should be baked in as well.
