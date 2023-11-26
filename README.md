# Password Generator

**Initial commit:** 05/05/23

**Technologies**: PHP, Blade, HTML, CSS e Bootstrap.

**Info**: :mag_right: A user interface able to generate a random string, it is possible to select some desired parameters such as the length of the string, the set of starting characters, and the possibility of inserting repeated characters.

<div>
  <img src="./assets/img/screencapture-1.png" width="30%" style="margin: 4px;"/>
  <img src="./assets/img/screencapture-2.png" width="30%" style="margin: 4px;"/>
  <img src="./assets/img/screencapture-3.png" width="30%" style="margin: 4px;"/>
</div>

## Milestone

- I created a form that sends the password length in a GET request.
- I created an initial function that using this single data generated a random password (composed of letters, capital letters, numbers, and symbols).
- Initially, I wrote all the code (logic and layout) in a single `index.php` file, subsequently, once I verified the correct functioning, I moved the logic to a `functions.php` file that I included on the main page.
- Instead of displaying the password in the index, I performed a `redirect` on a dedicated page which via `$\_SESSION` will retrieve the password to show to the user.
- I added the possibility of generating the password by choosing any combination of these character sets: numbers, letters, and symbols.
- I added the possibility of generating passwords which avoids the repetition of the same characters.
