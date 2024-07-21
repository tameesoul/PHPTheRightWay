<?php 

require APP_PATH . 'App.php';

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Transactions</title>
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
                text-align: center;
            }

            table tr th, table tr td {
                padding: 5px;
                border: 1px #eee solid;
            }

            tfoot tr th, tfoot tr td {
                font-size: 20px;
            }

            tfoot tr th {
                text-align: right;
            }
        </style>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Check #</th>
                    <th>Description</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
            <?php
                    foreach ($datas as $data) {
                       
                        $timestamp = strtotime($data['Date']);
                        $formattedDate = $timestamp ? date('M/d/o', $timestamp) : $data['Date'];

                        echo "<tr>";
                        echo "<td>{$formattedDate}</td>";
                        echo "<td>{$data['Check #']}</td>";
                        echo "<td>{$data['Description']}</td>";
                        $amount = floatval(str_replace(['$', ','], '', $data['Amount']));                        
                        if ($amount > 0) {
                            echo "<td style='color: green;'>{$data['Amount']}</td>";
                        } else {
                            echo "<td style='color: red;'>{$data['Amount']}</td>";
                        }
                        
                        echo "</tr>";
                    }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3">Total Income:</th>
                    <td>
                        <?php
                        $totalIncome = 0;
                        foreach($datas as $data)
                        {
                            $amount = floatval(str_replace(['$', ','], '', $data['Amount']));
                            if($amount>0)
                            {
                                $totalIncome += $amount;
                            }
                        }
                
                        echo "$". number_format($totalIncome, 2);
                        ?>
                    </td>
                </tr>
                <tr>
                    <th colspan="3">Total Expense:</th>
                    <td>
                        <?php 
                        $totalExpense = 0;
                        foreach($datas as $data)
                        {
                            $amount = floatval(str_replace(['$', ','], '', $data['Amount']));
                            if($amount<0)
                            {
                                $totalExpense += $amount;
                            }
                        }

                        echo '$'. number_format($totalExpense,2);
                        ?>
                    </td>
                </tr>
                <tr>
                    <th colspan="3">Net Total:</th>
                    <td>
                        <?php
                        $netTotal = $totalIncome + $totalExpense;
                        echo '$'. number_format($netTotal, 2);
                        ?>
                    </td>
                </tr>
            </tfoot>
        </table>
    </body>
</html>
