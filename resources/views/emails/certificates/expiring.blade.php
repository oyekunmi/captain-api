<div>
      <h3>Hello, Captain</h3>

      <p>Please find the list of expiring certificates below </p>

      <table style="width: 100%;border-collapse: collapse;border: 1px solid black;" width="100%" cellspacing="0" cellpadding="0">
        
        <tr>
          <th style="border: 1px solid black;height: 50px;background-color: #4CAF50;color: white;padding: 15px;text-align: left;"> Vessel Name </th>
          <th style="border: 1px solid black;height: 50px;background-color: #4CAF50;color: white;padding: 15px;text-align: left;"> Certificate Name </th>
          <th style="border: 1px solid black;height: 50px;background-color: #4CAF50;color: white;padding: 15px;text-align: left;"> Group </th>
          <th style="border: 1px solid black;height: 50px;background-color: #4CAF50;color: white;padding: 15px;text-align: left;"> Issue </th>
          <th style="border: 1px solid black;height: 50px;background-color: #4CAF50;color: white;padding: 15px;text-align: left;"> Expiry </th>
          <th style="border: 1px solid black;height: 50px;background-color: #4CAF50;color: white;padding: 15px;text-align: left;"> Days </th>
        </tr>

        <tbody>
          @foreach ($certificates as $c)
          <tr>
            <td style="border: 1px solid black;padding: 15px;text-align: left;"> {{ $c->vessel_name }} </td>
            <td style="border: 1px solid black;padding: 15px;text-align: left;"> {{ $c->name}} </td>
            <td style="border: 1px solid black;padding: 15px;text-align: left;"> {{ $c->group }} </td>
            <td style="border: 1px solid black;padding: 15px;text-align: left;"> {{ $c->issue}} </td>
            <td style="border: 1px solid black;padding: 15px;text-align: left;"> {{ $c->expiry }} </td>
            <td style="border: 1px solid black;padding: 15px;text-align: left;"> {{$c->expiringDays }} </td>
          </tr>
          @endforeach
        </tbody>
      </table>


  <h4>Regards</h4>
</div>