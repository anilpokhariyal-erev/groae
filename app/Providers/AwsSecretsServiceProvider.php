<?php
namespace App\Providers;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;
use Aws\SecretsManager\SecretsManagerClient;

class AwsSecretsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        try {

            // $client = new SecretsManagerClient([
            //     'region' => 'us-west-2',
            // ]);

            //$secretName = 'arn:aws:secretsmanager:us-west-2:728697536652:secret:roversecrets-Fdjf1Z';

            // $result = $client->getSecretValue(['SecretId' => $secretName]);
            // Log::error('result aws secret manager: ' . json_encode($result));
            // if (isset($result['SecretString'])) {
            //     $secrets = json_decode($result['SecretString'], true);

            //     foreach ($secrets as $key => $value) {
            //         echo strtoupper($key)."=".$value;
            //         putenv(strtoupper($key)."=".$value);
            //     }
            // }
        } catch(\Exception $e) {
            Log::error('Error aws secret manager: ' . $e->getMessage());
        }
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}