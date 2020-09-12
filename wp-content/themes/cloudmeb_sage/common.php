<?php
  function getCatColor($mode) {
    if (strcmp($mode, 'How to') == 0)
      return 'brown';
    if (strcmp($mode, 'Templates') == 0)
      return 'green';
    if (strcmp($mode, 'Checklists') == 0)
      return 'blue';
    if (strcmp($mode, 'Guides') == 0)
      return 'pink';
    if (strcmp($mode, 'Best Practices') == 0)
      return 'yarn';
    return '';
  }
