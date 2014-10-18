Random Avatar [by [Gabriel Zanetti][author]]
============================================

Description
-----------

Random Avatar is a [Question2Answer][Q2A] plugin that assigns new users a random avatar from a given set immediately after registering.

Features
--------

 *  Images are randomly selected from a directory
 *  No need of core hacks or plugin overrides
 *  Simple installation

Notes:

 *  The plugin works on Q2A version 1.6.x and should work on 1.7 too, once it is released
 *  The plugin does not work when using external users

Setup comments
--------------

 1. Copy the plugin directory into the `qa-plugin` directory.
 1. Avatars are selected from the `avatars` directory. Add new or remove the existing ones at any time. Note image requirements are exactly the ones required when setting the user's avatar in the profile section.
 1. Enable the plugin from the *Admin -> Plugins* menu option.

About the default avatar setting
--------------------------------

In *Admin -> Users* there is a *Default avatar* setting. It doesn't interfere with the plugin at all. That setting controls what avatar should be displayed for users who have not set any avatar yet after registration. The Random Avatar plugin immediately assigns an avatar to all users so those users will hava an avatar set so no new user will use the default avatar.

However, all users created before enabling Random Avatar who have never set an avatar in their profiles will be displayed the default avatar or none, if the *Default avatar* setting is disabled.

Support
-------

If you've found a bug then create a ticket in the [Issues][issues] section.

Get the plugin
--------------

The plugin can be downloaded from [this link][download]. You can say thanks [donating using PayPal][paypal].


[Q2A]: http://www.question2answer.com
[download]: https://github.com/pupi1985/q2a-random-avatar/archive/master.zip
[issues]: https://github.com/pupi1985/q2a-random-avatar/issues
[paypal]: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=Y7LUM6ML4UV9L
[author]: http://question2answer.org/qa/user/pupi1985
