<!DOCTYPE html>
<html>
  <head>
    <title>FCC: Survey Form</title>
    <meta charset="UTF-8">
  </head>
  <style>
:root {
  --color-white: #f3f3f3;
  --color-darkblue: #1b1b32;
  --color-darkblue-alpha: rgba(27, 27, 50, 0.8);
  --color-green: #37af65;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}
  body {
  font-family: 'Poppins', sans-serif;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.4;
  color: var(--color-white);
  margin: 0;
}
body::before {
  content: '';
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  z-index: -1;
  background: var(--color-darkblue);
  background-image: linear-gradient(
      115deg,
      rgba(58, 58, 158, 0.8),
      rgba(136, 136, 206, 0.7)
    ),
    url(https://raw.githubusercontent.com/lasjorg/fcc-form-example-image/master/67103817-7c51e200-f18b-11e9-975f-f74561336a9a-lj.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}
h1 {
  font-weight: 400;
  line-height: 1.2;
}

h1,p{
    margin-top: 0;
  margin-bottom: 0.5rem
}

p {
  font-size: 1.125rem;
 ;
}
label {
  display: flex;
  align-items: center;
  font-size: 1.125rem;
  margin-bottom: 0.5rem;
}
input{
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}
button{
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}
select{
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}
button {
  border: none;
}

.container {
  width: 100%;
  margin: 3.125rem auto 0 auto;
}

@media (min-width: 576px) {
  .container {
    max-width: 540px;
  }

}
@media (min-width: 768px) {
  .container {
    max-width: 720px;
  }
}

.header {
  padding: 0 0.625rem;
  margin-bottom: 1.875rem;
}

#description {
  font-style: italic;
  font-weight: 200;
  text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.4);
}
  
.clue {
  margin-left: 0.25rem;
  font-size: 0.9rem;
  color: #e4e4e4;
}

.text-center {
  text-align: center;
}

form {
  background: var(--color-darkblue-alpha);
  padding: 2.5rem 0.625rem;
  border-radius: 0.25rem;
}

@media (min-width: 480px) {
  form {
    padding: 2.5rem;
  }
}

.form-group {
  margin: 0 auto 1.25rem auto;
  padding: 0.25rem;
} 

.form-control {
  display: block;
  width: 100%;
  height: 2.375rem;
  padding: 0.375rem 0.75rem;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.form-control:focus {
  border-color: #80bdff;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.input-radio,
.input-checkbox {
  display: inline-block;
  margin-right: 0.625rem;
  min-height: 1.25rem;
  min-width: 1.25rem;
}

.input-textarea {
  min-height: 120px;
  width: 100%;
  padding: 0.625rem;
  resize: vertical;
}

.submit-button {
  display: block;
  width: 100%;
  padding: 0.75rem;
  background: var(--color-green);
  color: inherit;
  border-radius: 2px;
  cursor: pointer;
}

  </style>
  <body>
  <div class="container">
   <header class="header">
    <h1 id="title" class="text-center">
      Ebuka's Survey Form
    </h1>
    <p id="description" class="description text-center">
      Thank you for taking the time to help us improve our platform
    </p>
   </header>
    <form id="survey-form">

     <div class="form-group">
      <label id="name-label" for="name">Name</label><br>
      <input class="form-control" type="text" placeholder="Enter your name" name="name"required><br>
      
      <label id="email-label" for="email">Email</label><br>
      <input class="form-control" type="email" placeholder="Enter your Email" name="email"required><br>
      
      <label id="number-label" for="age">Age(optional)</label><br>
      <input class="form-control" type="number" placeholder="Age" name="age" min="10" max="99"required><br>
     </div> 

      <div class="form-group">
       <p>Which option best describes your current role?</p>
        <select id="dropdown" name="dropdown" class="form-control">
          <option value="Selectcurrentrole">Select current role</option>
          <option value="Student">Student</option>
          <option value="FullTimeJ">Full Time Job</option>
          <option value="FullTimeLearn">Full Time Learner</option>
          <option value="Prefernot">Prefer not to say</option>
          <option value="Others">Others</option>
        </select>
      </div>
      
      <div class="form-group">
        <p>Would you recommend freeCodeCamp to a friend?</p>
        <label>
         <input name="user-recommend" value="definitely" type="radio" class="input-radio" checked />Definitely
        </label>
        <label>
         <input name="user-recommend" value="maybe" type="radio" class="input-radio" />Maybe
        </label>
        <label>
         <input name="user-recommend" value="not-sure" type="radio" class="input-radio" />Not sure
        </label>
      </div>

      <div class="form-group">
        <p>What is your favorite feature of freeCodeCamp? </p>
       <select id="most-like" name="mostLike" class="form-control" required>
        <option disabled selected value>Select an option</option>
        <option value="challenges">Challenges</option>
        <option value="projects">Projects</option>
        <option value="community">Community</option>
        <option value="openSource">Open Source</option>
       </select>
      </div>

     <div class="form-group">
        <p>
        What would you like to see improved?
        <span class="clue">(Check all that apply)</span>
        </p>
        <label>
            <input name="prefer" value="front-end-projects" type="checkbox" class="input-checkbox"/>Front-end Projects
        </label>
        <label>
            <input name="prefer" value="back-end-projects" type="checkbox" class="input-checkbox"/>Back-end Projects
        </label>
        <label>
            <input name="prefer" value="data-visualization" type="checkbox" class="input-checkbox"/>Data Visualization
        </label>
        <label>
            <input name="prefer" value="challenges" type="checkbox" class="input-checkbox"/>Challenges
        </label>
        <label>
            <input name="prefer" value="open-source-community" type="checkbox" class="input-checkbox"/>Open Source Community
        </label>
        <label>
            <input name="prefer" value="gitter-help-rooms" type="checkbox" class="input-checkbox"/>Gitter help rooms
        </label>
        <label>
            <input name="prefer" value="videos" type="checkbox" class="input-checkbox"/>Videos
        </label>
        <label>
            <input name="prefer" value="city-meetups" type="checkbox" class="input-checkbox"/>City Meetups
        </label>
        <label>
            <input name="prefer" value="wiki" type="checkbox" class="input-checkbox"/>Wiki
        </label>
        <label>
            <input name="prefer" value="forum" type="checkbox" class="input-checkbox"/>Forum
        </label>
        <label>
            <input name="prefer" value="additional-courses" type="checkbox" class="input-checkbox"/>Additional Courses
        </label>
     </div>

     <div class="form-group">
         <p>
             Any comments or suggestions?
         </p>
         <textarea id="comments" class="input-textarea" name="comment" placeholder="Enter your comment here..."></textarea>   
      </div>
    
     <div class="form-group">
        <button type="submit" id="submit" class="submit-button"> Submit</button>
     </div> 
        
    </form>
 </div>
  </body>
</html>