<div class="main-content">
  <div class="add-class-container">
    <div class="meta">
      <h2 class="meta-title">Add New Class</h2>
      <p class="meta-description">Please kindly fill the fields below</p>
    </div>

    <div class="flasher-container">
      <?php Flasher::flash(); ?>
    </div>

    <form action="" method="post">
      <div class="input-group">
        <label for="class-name">Class Name</label>
        <input type="text" name="class-name" id="class-name" placeholder="Enter Class Name" required>
      </div>

      <div class="input-group">
        <label for="major">Major Name</label>
        <select name="major_name" id="major" _name required>
          <option value="">-- Select Major --</option>
          <option value="Software Engineering">Software Engineering</option>
          <option value="Computer Network Engineering">Computer Network Engineering</option>
          <option value="Animation">Animation</option>
          <option value="Visual Communication Design">Visual Communication Design</option>
        </select>
      </div>

      <div class="input-group">
        <button type="submit" name="add-class">
          <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.5" y="0.5" width="32" height="32" rx="16" stroke="black" />
            <path d="M16.3333 8V25" stroke="black" stroke-linecap="round" />
            <path d="M7 16.5H26" stroke="black" stroke-linecap="round" />
          </svg>
          Add Class
        </button>
      </div>
    </form>
  </div>
</div>