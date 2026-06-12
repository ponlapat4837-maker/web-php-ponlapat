<?php
// Handle form submissions
$multiResult = [];
$multiNum = '';
$multiError = '';

$sumResult = null;
$num1 = '';
$num2 = '';
$sumError = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Multiplication table
    if (isset($_POST['action']) && $_POST['action'] === 'multiply') {
        $multiNum = trim($_POST['number'] ?? '');
        if ($multiNum === '' || !is_numeric($multiNum)) {
            $multiError = 'กรุณาป้อนตัวเลขที่ถูกต้อง';
        } else {
            $multiNum = (int)$multiNum;
            for ($i = 1; $i <= 12; $i++) {
                $multiResult[] = [
                    'i'      => $i,
                    'result' => $multiNum * $i,
                ];
            }
        }
    }

    // Addition
    if (isset($_POST['action']) && $_POST['action'] === 'add') {
        $num1 = trim($_POST['num1'] ?? '');
        $num2 = trim($_POST['num2'] ?? '');
        if ($num1 === '' || $num2 === '' || !is_numeric($num1) || !is_numeric($num2)) {
            $sumError = 'กรุณาป้อนตัวเลขให้ครบทั้ง 2 ช่อง';
        } else {
            $sumResult = (float)$num1 + (float)$num2;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>เครื่องคำนวณ PHP</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600;700&family=Space+Grotesk:wght@400;600;700&display=swap');

  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  :root {
    --bg:        #0f1117;
    --surface:   #181c27;
    --border:    #2a2f42;
    --accent1:   #6c63ff;
    --accent2:   #ff6584;
    --text:      #e8eaf0;
    --muted:     #7b8199;
    --success:   #43e97b;
    --card-r:    16px;
    --font-th:   'Sarabun', sans-serif;
    --font-en:   'Space Grotesk', sans-serif;
  }

  body {
    background: var(--bg);
    color: var(--text);
    font-family: var(--font-th);
    min-height: 100vh;
    padding: 2rem 1rem 4rem;
  }

  /* ── Header ── */
  header {
    text-align: center;
    margin-bottom: 3rem;
  }
  header h1 {
    font-family: var(--font-en);
    font-size: clamp(1.8rem, 5vw, 3rem);
    font-weight: 700;
    letter-spacing: -0.03em;
    background: linear-gradient(135deg, var(--accent1) 0%, var(--accent2) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: .5rem;
  }
  header p {
    color: var(--muted);
    font-size: 1rem;
  }

  /* ── Layout ── */
  .grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
    gap: 2rem;
    max-width: 900px;
    margin: 0 auto;
  }

  /* ── Card ── */
  .card {
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: var(--card-r);
    padding: 2rem;
    display: flex;
    flex-direction: column;
    gap: 1.4rem;
  }

  .card-header {
    display: flex;
    align-items: center;
    gap: .75rem;
  }
  .badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 2.2rem;
    height: 2.2rem;
    border-radius: 8px;
    font-family: var(--font-en);
    font-weight: 700;
    font-size: .85rem;
    flex-shrink: 0;
  }
  .badge-purple { background: rgba(108,99,255,.18); color: var(--accent1); }
  .badge-pink   { background: rgba(255,101,132,.18); color: var(--accent2); }

  .card-title {
    font-size: 1.1rem;
    font-weight: 600;
    line-height: 1.3;
  }

  /* ── Form ── */
  .field { display: flex; flex-direction: column; gap: .45rem; }
  label  { font-size: .85rem; color: var(--muted); font-weight: 600; letter-spacing: .04em; text-transform: uppercase; }

  input[type="number"] {
    background: var(--bg);
    border: 1.5px solid var(--border);
    border-radius: 10px;
    color: var(--text);
    font-family: var(--font-en);
    font-size: 1.1rem;
    padding: .7rem 1rem;
    width: 100%;
    outline: none;
    transition: border-color .2s;
    -moz-appearance: textfield;
  }
  input[type="number"]::-webkit-inner-spin-button { -webkit-appearance: none; }
  input[type="number"]:focus { border-color: var(--accent1); }

  .row-inputs { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }

  button[type="submit"] {
    cursor: pointer;
    border: none;
    border-radius: 10px;
    font-family: var(--font-th);
    font-size: 1rem;
    font-weight: 600;
    padding: .75rem;
    width: 100%;
    transition: opacity .2s, transform .1s;
  }
  button[type="submit"]:active { transform: scale(.98); }
  .btn-purple { background: var(--accent1); color: #fff; }
  .btn-pink   { background: var(--accent2); color: #fff; }
  button[type="submit"]:hover { opacity: .88; }

  /* ── Error ── */
  .error {
    background: rgba(255,101,132,.12);
    border: 1px solid rgba(255,101,132,.3);
    border-radius: 8px;
    color: var(--accent2);
    font-size: .9rem;
    padding: .65rem 1rem;
  }

  /* ── Multiplication table ── */
  .table-wrap {
    background: var(--bg);
    border: 1px solid var(--border);
    border-radius: 10px;
    overflow: hidden;
  }
  .table-title {
    background: rgba(108,99,255,.12);
    color: var(--accent1);
    font-family: var(--font-en);
    font-size: .8rem;
    font-weight: 700;
    letter-spacing: .06em;
    padding: .6rem 1rem;
    text-transform: uppercase;
  }
  table { width: 100%; border-collapse: collapse; }
  th, td {
    padding: .55rem 1rem;
    font-size: .95rem;
    text-align: left;
  }
  th { color: var(--muted); font-size: .78rem; text-transform: uppercase; letter-spacing: .05em; font-weight: 600; }
  tr:nth-child(even) td { background: rgba(255,255,255,.025); }
  .eq { color: var(--muted); font-family: var(--font-en); margin: 0 .3rem; }
  .result-num { font-family: var(--font-en); font-weight: 700; color: var(--accent1); }

  /* ── Sum result ── */
  .sum-box {
    background: var(--bg);
    border: 1px solid var(--border);
    border-radius: 10px;
    padding: 1.4rem;
    text-align: center;
  }
  .sum-label { color: var(--muted); font-size: .85rem; margin-bottom: .4rem; }
  .sum-equation {
    font-family: var(--font-en);
    font-size: 1.05rem;
    color: var(--text);
    margin-bottom: .5rem;
  }
  .sum-answer {
    font-family: var(--font-en);
    font-size: 2.4rem;
    font-weight: 700;
    background: linear-gradient(135deg, var(--accent2), #ff9a9e);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }

  @media (max-width: 460px) {
    .row-inputs { grid-template-columns: 1fr; }
  }
</style>
</head>
<body>

<header>
  <h1>PHP Calculator</h1>
  <p>สูตรคูณ &amp; การบวกเลข</p>
</header>

<div class="grid">

  <!-- ── Card 1: Multiplication Table ── -->
  <div class="card">
    <div class="card-header">
      <span class="badge badge-purple">×</span>
      <span class="card-title">สูตรคูณ (แม่ 1–12)</span>
    </div>

    <form method="POST">
      <input type="hidden" name="action" value="multiply">
      <div class="field">
        <label for="number">ป้อนตัวเลข</label>
        <input type="number" id="number" name="number"
               placeholder="เช่น 7"
               value="<?= htmlspecialchars($multiNum) ?>"
               required>
      </div>
      <?php if ($multiError): ?>
        <div class="error" style="margin-top:.5rem"><?= htmlspecialchars($multiError) ?></div>
      <?php endif; ?>
      <button type="submit" class="btn-purple" style="margin-top:1rem">แสดงสูตรคูณ</button>
    </form>

    <?php if ($multiResult): ?>
    <div class="table-wrap">
      <div class="table-title">สูตรคูณแม่ <?= $multiNum ?></div>
      <table>
        <thead>
          <tr><th>#</th><th>การคูณ</th><th>ผลลัพธ์</th></tr>
        </thead>
        <tbody>
          <?php foreach ($multiResult as $row): ?>
          <tr>
            <td><?= $row['i'] ?></td>
            <td style="font-family:var(--font-en)">
              <?= $multiNum ?><span class="eq">×</span><?= $row['i'] ?>
            </td>
            <td><span class="result-num"><?= $row['result'] ?></span></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <?php endif; ?>
  </div>

  <!-- ── Card 2: Addition ── -->
  <div class="card">
    <div class="card-header">
      <span class="badge badge-pink">+</span>
      <span class="card-title">บวกตัวเลข 2 จำนวน</span>
    </div>

    <form method="POST">
      <input type="hidden" name="action" value="add">
      <div class="row-inputs">
        <div class="field">
          <label for="num1">ตัวเลขที่ 1</label>
          <input type="number" id="num1" name="num1"
                 placeholder="เช่น 25"
                 value="<?= htmlspecialchars($num1) ?>"
                 step="any" required>
        </div>
        <div class="field">
          <label for="num2">ตัวเลขที่ 2</label>
          <input type="number" id="num2" name="num2"
                 placeholder="เช่น 38"
                 value="<?= htmlspecialchars($num2) ?>"
                 step="any" required>
        </div>
      </div>
      <?php if ($sumError): ?>
        <div class="error" style="margin-top:.5rem"><?= htmlspecialchars($sumError) ?></div>
      <?php endif; ?>
      <button type="submit" class="btn-pink" style="margin-top:1rem">คำนวณผลรวม</button>
    </form>

    <?php if ($sumResult !== null): ?>
    <div class="sum-box">
      <div class="sum-label">ผลการบวก</div>
      <div class="sum-equation">
        <?= htmlspecialchars($num1) ?> + <?= htmlspecialchars($num2) ?> =
      </div>
      <div class="sum-answer">
        <?= rtrim(rtrim(number_format($sumResult, 10, '.', ''), '0'), '.') ?>
      </div>
    </div>
    <?php endif; ?>
  </div>

</div>

</body>
</html>