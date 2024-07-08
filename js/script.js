function updateSkill(skillName, targetPercentage) {
    const skillBar = document.getElementById(`${skillName}-bar`);
    let currentPercentage = 0;
    const increment = 1;
    const intervalTime = 30; // Adjust the interval time for smoother animation

    const interval = setInterval(function () {
        if (currentPercentage >= targetPercentage) {
            clearInterval(interval);
        } else {
            currentPercentage += increment;
            skillBar.style.width = currentPercentage + '%';
            skillBar.textContent = currentPercentage + '%';
        }
    }, intervalTime);
}

// Example: Increase HTML skill to 80% over 3 seconds
updateSkill("cs", 95);

// Example: Increase CSS skill to 70% over 3 seconds
updateSkill("ss", 98);

// Example: Increase JavaScript skill to 90% over 3 seconds
updateSkill("dr", 92);
