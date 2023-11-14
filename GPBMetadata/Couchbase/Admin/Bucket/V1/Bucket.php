<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: couchbase/admin/bucket/v1/bucket.proto

namespace GPBMetadata\Couchbase\Admin\Bucket\V1;

class Bucket
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Couchbase\Kv\V1\Kv::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
&couchbase/admin/bucket/v1/bucket.protocouchbase.admin.bucket.v1"
ListBucketsRequest"�
ListBucketsResponseF
buckets (25.couchbase.admin.bucket.v1.ListBucketsResponse.Bucket�
Bucket
bucket_name (	
flush_enabled (
ram_quota_mb (
num_replicas (
replica_indexes (:
bucket_type (2%.couchbase.admin.bucket.v1.BucketType>
eviction_mode (2\'.couchbase.admin.bucket.v1.EvictionMode
max_expiry_secs (D
compression_mode	 (2*.couchbase.admin.bucket.v1.CompressionModeG
minimum_durability_level
 (2 .couchbase.kv.v1.DurabilityLevelH �G
storage_backend (2).couchbase.admin.bucket.v1.StorageBackendH�S
conflict_resolution_type (21.couchbase.admin.bucket.v1.ConflictResolutionTypeB
_minimum_durability_levelB
_storage_backend"�
CreateBucketRequest
bucket_name (	:
bucket_type (2%.couchbase.admin.bucket.v1.BucketType
ram_quota_mb (H �
num_replicas (H�
flush_enabled (H�
replica_indexes (H�C
eviction_mode (2\'.couchbase.admin.bucket.v1.EvictionModeH�
max_expiry_secs (H�I
compression_mode	 (2*.couchbase.admin.bucket.v1.CompressionModeH�G
minimum_durability_level
 (2 .couchbase.kv.v1.DurabilityLevelH�G
storage_backend (2).couchbase.admin.bucket.v1.StorageBackendH�X
conflict_resolution_type (21.couchbase.admin.bucket.v1.ConflictResolutionTypeH	�B
_ram_quota_mbB
_num_replicasB
_flush_enabledB
_replica_indexesB
_eviction_modeB
_max_expiry_secsB
_compression_modeB
_minimum_durability_levelB
_storage_backendB
_conflict_resolution_type"+
CreateBucketResponse
bucket_uuid (	"�
UpdateBucketRequest
bucket_name (	
ram_quota_mb (H �
num_replicas (H�
flush_enabled (H�C
eviction_mode (2\'.couchbase.admin.bucket.v1.EvictionModeH�
max_expiry_secs (H�I
compression_mode (2*.couchbase.admin.bucket.v1.CompressionModeH�G
minimum_durability_level (2 .couchbase.kv.v1.DurabilityLevelH�B
_ram_quota_mbB
_num_replicasB
_flush_enabledB
_eviction_modeB
_max_expiry_secsB
_compression_modeB
_minimum_durability_level"
UpdateBucketResponse"*
DeleteBucketRequest
bucket_name (	"
DeleteBucketResponse*B

BucketType
BUCKET_TYPE_COUCHBASE 
BUCKET_TYPE_EPHEMERAL*�
EvictionMode
EVICTION_MODE_FULL #
EVICTION_MODE_NOT_RECENTLY_USED
EVICTION_MODE_VALUE_ONLY
EVICTION_MODE_NONE*f
CompressionMode
COMPRESSION_MODE_OFF 
COMPRESSION_MODE_PASSIVE
COMPRESSION_MODE_ACTIVE*K
StorageBackend
STORAGE_BACKEND_COUCHSTORE 
STORAGE_BACKEND_MAGMA*�
ConflictResolutionType&
"CONFLICT_RESOLUTION_TYPE_TIMESTAMP ,
(CONFLICT_RESOLUTION_TYPE_SEQUENCE_NUMBER#
CONFLICT_RESOLUTION_TYPE_CUSTOM2�
BucketAdminServicen
ListBuckets-.couchbase.admin.bucket.v1.ListBucketsRequest..couchbase.admin.bucket.v1.ListBucketsResponse" q
CreateBucket..couchbase.admin.bucket.v1.CreateBucketRequest/.couchbase.admin.bucket.v1.CreateBucketResponse" q
UpdateBucket..couchbase.admin.bucket.v1.UpdateBucketRequest/.couchbase.admin.bucket.v1.UpdateBucketResponse" q
DeleteBucket..couchbase.admin.bucket.v1.DeleteBucketRequest/.couchbase.admin.bucket.v1.DeleteBucketResponse" B�
1com.couchbase.client.protostellar.admin.bucket.v1PZLgithub.com/couchbase/goprotostellar/genproto/admin_bucket_v1;admin_bucket_v1�&Couchbase.Protostellar.Admin.Bucket.V1�0Couchbase\\Protostellar\\Generated\\Admin\\Bucket\\V1�5Couchbase::Protostellar::Generated::Admin::Bucket::V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

